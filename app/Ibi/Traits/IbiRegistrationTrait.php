<?php

namespace Ibi\Traits;

use App\Http\Controllers\Controller;
use App\User;
use Event;
use Ibi\Events\ExternalUsers\ExternalUserWasCreated;
use Ibi\Models\Provincie;
use Ibi\Models\Specializzazioni;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Validator;

trait IbiRegistrationTrait
{
    protected $allowed_roles = ['medico', 'farmacista'];

    public function getRegisterIbi()
    {
        $provincie = Provincie::all();
        $specializzazioni = Specializzazioni::all();
        return view('auth.register', compact('provincie', 'specializzazioni'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        $messages = [
            'first_name.required' => "Il campo 'Nome' è obbligatorio",
            'last_name.required' => "Il campo 'Cognome' è obbligatorio",
            'email.required' => "Il campo 'Email' è obbligatorio",
            'email.unique' => "L'indirizzo email è gia presente nel database",
            'password.required' => "Il campo 'Password' è obbligatorio",
            'password.confirmed' => "La conferma della password non è corretta",
            'g-recaptcha-response.required' => 'La verifica non è stata effettuata',
            'g-recaptcha-response.captcha' => 'La verifica non è stata effettuata correttamente',
        ];

        return Validator::make($data, [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'g-recaptcha-response' => 'required|captcha'
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'active' => '0'
        ]);
    }

    public function ibiPostRegister(Request $request)
    {

        $data = $request->all();

        $profile = $data['profile'];
        $role = $this->validate_role($profile['ruolo']);

        if(! $role) return false;
        

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
        
        $user_data = $data;

        unset($user_data['profile']);
        
        $user = $this->create($user_data);

        $user->profile()->create($profile);

        $user->assignRole($role);

        Event::fire(new ExternalUserWasCreated($user));

        return redirect()->to('auth/conferma');
    }

    public function conferma()
    {
        flash()->success('La registrazione è stata effettuata con successo. A breve riceverai una mail di attivazione.');

        $user = User::find(6);

        Event::fire(new ExternalUserWasCreated($user));

        return view('auth.register_confirm');
    }

    public function validate_role($role_string)
    {

        if(! in_array($role_string, $this->allowed_roles)) return false;

        $role = Role::where('name', $role_string)->first();

        if(! $role ) return false;

        return $role_string;

    }

}
