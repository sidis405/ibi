<?php

namespace Ibi\Repositories;

use App\User;

/**
* Paesi Repo
*/
class ExternalUsersRepo
{
    public function save(User $user)
    {
        $user->save();

        return $user;
    }

    public function remove($id)
    {
        $user = $this->getById($id);

        $user->roles()->sync([]);

        $user->delete();

        return true;
    }

    public function getAllNew()
    {
        return User::with('roles', 'profile.provincia_albo_rel', 'profile.specializzazione_rel')->whereHas('roles' , function($q){
                    $q->where('name', '=', 'Medico')->orWhere('name', '=', 'Farmacista');
                })->where('active', 0)->orderBy('first_name')->get();
    } 

    public function getAll()
    {
        // return User::with('roles')->orderBy('first_name')->get();
        return User::with('roles', 'profile.provincia_albo_rel', 'profile.specializzazione_rel')->whereHas('roles' , function($q){
                    $q->whereIn('name', ['Medico', 'Farmacista']);
                })->orderBy('first_name')->get();
    } 

    public function getById($id)
    {
        return User::where('id', $id)->with('roles', 'profile.provincia_albo_rel', 'profile.specializzazione_rel', 'profile.provincia_residenza_rel', 'profile.provincia_attivita_rel')->first();
    } 
}
