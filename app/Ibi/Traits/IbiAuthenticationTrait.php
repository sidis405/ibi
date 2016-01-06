<?php

namespace Ibi\Traits;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Validator;
use Illuminate\Support\Facades\Auth;

trait IbiAuthenticationTrait
{
    protected $login_user_allowed_roles = ['Medico', 'Farmacista'];

    public function areaRiservataLogin(Request $request)
    {
        $this->validate($request, [
            $this->loginUsername() => 'required', 'password' => 'required',
        ]);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        $throttles = $this->isUsingThrottlesLoginsTrait();

        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        $credentials = $this->getCredentialsIbi($request);

        // dd($credentials);

        if ($this->ibiUserAuthAttempt($credentials, $request, $throttles)) {
            return $this->handleUserWasAuthenticatedIbi($request, $throttles);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }

        return redirect('/area-riservata')
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
    }

    public function ibiUserAuthAttempt($credentials, $request)
    {
        $attempt = Auth::attempt($credentials, $request->has('remember'));
        if ($attempt) {
            $user = Auth::user();
            if(! in_array($user->roles[0]->name, $this->login_user_allowed_roles) )
            {
                \Auth::logout();
                return false;
            }
            return true;
        }

        return false;
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  bool  $throttles
     * @return \Illuminate\Http\Response
     */
    protected function handleUserWasAuthenticatedIbi(Request $request, $throttles)
    {
        if ($throttles) {
            $this->clearLoginAttempts($request);
        }

        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::user());
        }

        return redirect()->intended('/');
    }

    protected function getCredentialsIbi(Request $request)
    {
        return array_add($request->only($this->loginUsername(), 'password'), 'active', 1);
    }

}
