<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\ExternalUsersRepo;
use Illuminate\Http\Request;


class ExternalUsersController extends Controller
{
    /**
     * Display a listing of the User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ExternalUsersRepo $external_users_repo)
    {
        $utenti = $external_users_repo->getAll();

        // return $utenti[0]->profile[0]->provincia_albo_rel->nome;

        return view('admin.medici-farmacisti.index', compact('utenti'));

    }



    /**
     * Display the specified User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, ExternalUsersRepo $external_users_repo)
    {
        $utente = $external_users_repo->getById($id);

        // return $utente;

        return view('admin.medici-farmacisti.show', compact('utente'));
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

        $data = $this->manageUploads($request);

        $utente = $this->dispatchFrom('Ibi\Commands\ExternalUsers\UpdateExternalUserCommand', $request, $data);


        return redirect()->to('/admin/medici-farmacisti');
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, ExternalUsersRepo $external_users_repo)
    {
        $delete = $external_users_repo->remove($id);

        return 'true';
    }

    protected function manageUploads($request)
    {
        $data = [];


        if($request->has('active'))
        {
            $data['active'] = $request->input('active');
        }else{
            $data['active'] = 0;
        }

        return $data;
    }

}
