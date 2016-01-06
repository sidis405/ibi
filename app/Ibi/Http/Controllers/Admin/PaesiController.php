<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\PaesiRepo;
use Illuminate\Http\Request;


class PaesiController extends AdminController
{
    /**
     * Display a listing of the Paesi.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PaesiRepo $paesi_repo)
    {
        $paesi = $paesi_repo->getAll();

        return view('admin.paesi.index', compact('paesi'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paesi.create');
    }



    /**
     * Store a newly created Paesi in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paese = $this->dispatchFrom('Ibi\Commands\Paesi\CreatePaeseCommand', $request);
        
        return redirect()->to('/admin/paesi-export');
    }

    /**
     * Display the specified Paesi.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, PaesiRepo $paesi_repo)
    {
        $paese = $paesi_repo->getById($id);

        return view('admin.paesi.show', compact('paese'));
    }

    /**
     * Show the form for editing the specified Paesi.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, PaesiRepo $paesi_repo)
    {
        $paese = $paesi_repo->getById($id);

        return view('admin.paesi.edit', compact('paese'));
    }

    /**
     * Update the specified Paesi in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paese = $this->dispatchFrom('Ibi\Commands\Paesi\UpdatePaeseCommand', $request);

        flash()->success('News aggiornata correttamente.');

        return redirect()->to('/admin/paesi-export');
    }

    /**
     * Remove the specified Paesi from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, PaesiRepo $paesi_repo)
    {
        $delete = $paesi_repo->remove($id);

        return 'true';
    }

}
