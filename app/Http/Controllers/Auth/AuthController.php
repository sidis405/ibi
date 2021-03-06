<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Validator;
use Ibi\Events\ExternalUsers\ExternalUserWasCreated;
use Event;
use Ibi\Traits\IbiRegistrationTrait;
use Ibi\Traits\IbiAuthenticationTrait;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins, IbiRegistrationTrait, IbiAuthenticationTrait;

    
    protected $login_admin_denied_roles = ['Medico', 'Farmacista'];

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function postRegister(Request $request)
    {

        return $this->ibiPostRegister($request);
    }

    public function postLogin(Request $request)
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

        $credentials = $this->getCredentials($request);

        if ($this->ibiAdminAuthAttempt($credentials, $request, $throttles)) {
            return $this->handleUserWasAuthenticatedIbi($request, $throttles);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        if ($throttles) {
            $this->incrementLoginAttempts($request);
        }

        return redirect($this->loginPath())
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
    }

    public function ibiAdminAuthAttempt($credentials, $request)
    {
        $attempt = Auth::attempt($credentials, $request->has('remember'));
        if ($attempt) {
            $user = Auth::user();
            if(in_array($user->roles[0]->name, $this->login_admin_denied_roles) )
            {
                \Auth::logout();
                return false;
            }
            return true;
        }

        return false;
    }

    
}
