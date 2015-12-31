<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\InternalUsersRepo;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    /**
     * Display a listing of the User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(InternalUsersRepo $internal_users_repo)
    {
        $utenti = $internal_users_repo->getAll();

        // return $utenti;

        return view('admin.acl.utenti.index', compact('utenti'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ruoli = Role::all();

        return view('admin.acl.utenti.create', compact('ruoli'));
    }



    /**
     * Store a newly created User in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $utente = $this->dispatchFrom('Ibi\Commands\InternalUsers\CreateInternalUserCommand', $request);
        
        return redirect()->to('/admin/utenti');
    }

    /**
     * Display the specified User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id, InternalUsersRepo $internal_users_repo)
    // {
    //     $fascia = $internal_users_repo->getById($id);

    //     return view('admin.acl.utenti.show', compact('fascia'));
    // }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, InternalUsersRepo $internal_users_repo)
    {
        $utente = $internal_users_repo->getById($id);

        $ruoli = Role::all();

        return view('admin.acl.utenti.edit', compact('utente', 'ruoli'));
    }

    /**
     * Update the specified User in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // return $request->input();

        $utente = $this->dispatchFrom('Ibi\Commands\InternalUsers\UpdateInternalUserCommand', $request);

        flash()->success('News aggiornata correttamente.');

        return redirect()->to('/admin/utenti');
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, InternalUsersRepo $internal_users_repo)
    {
        $delete = $internal_users_repo->remove($id);

        return 'true';
    }

}
