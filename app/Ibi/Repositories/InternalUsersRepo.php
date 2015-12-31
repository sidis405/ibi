<?php

namespace Ibi\Repositories;

use App\User;

/**
* Paesi Repo
*/
class InternalUsersRepo
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

    public function getAll()
    {
        return User::with('roles')->orderBy('first_name')->get();
    } 

    public function getById($id)
    {
        return User::where('id', $id)->with('roles')->first();
    } 
}
