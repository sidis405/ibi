<?php

namespace App;

use Ibi\Models\Profiles;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Laracasts\Presenter\PresentableTrait;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, PresentableTrait, HasRoles;

    protected $presenter = 'Ibi\Presenters\UserPresenter';
    protected $dates = ['created_at', 'updated_at', 'last_login'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_has_roles', 'user_id', 'role_id');
    }

    public function profile()
    {
        return $this->hasMany(Profiles::class, 'user_id');
    }

     public static function make_internal($first_name, $last_name, $email, $password, $active){

        $password = bcrypt($password);

        $internal_user = new static(compact('first_name', 'last_name', 'email', 'password', 'active'));

        return $internal_user;
    }

    public static function edit_internal($user_id, $first_name, $last_name, $email, $active){

        $internal_user = static::find($user_id);

        $internal_user->first_name = $first_name;
        $internal_user->last_name = $last_name;
        $internal_user->email = $email;
        $internal_user->active = $active;

        return $internal_user;
    }
}
