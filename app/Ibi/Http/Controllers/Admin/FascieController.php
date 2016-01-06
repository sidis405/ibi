<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\FascieRepo;
use Illuminate\Http\Request;


class FascieController extends AdminController
{
    /**
     * Display a listing of the Fascie.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FascieRepo $fascie_repo)
    {
        $fascie = $fascie_repo->getAll();

        return view('admin.fascie.index', compact('fascie'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fascie.create');
    }



    /**
     * Store a newly created Fascie in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fascia = $this->dispatchFrom('Ibi\Commands\Fascie\CreateFasciaCommand', $request);
        
        return redirect()->to('/admin/fascie');
    }

    /**
     * Display the specified Fascie.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, FascieRepo $fascie_repo)
    {
        $fascia = $fascie_repo->getById($id);

        return view('admin.fascie.show', compact('fascia'));
    }

    /**
     * Show the form for editing the specified Fascie.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, FascieRepo $fascie_repo)
    {
        $fascia = $fascie_repo->getById($id);

        return view('admin.fascie.edit', compact('fascia'));
    }

    /**
     * Update the specified Fascie in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paese = $this->dispatchFrom('Ibi\Commands\Fascie\UpdateFasciaCommand', $request);

        flash()->success('News aggiornata correttamente.');

        return redirect()->to('/admin/fascie');
    }

    /**
     * Remove the specified Fascie from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, FascieRepo $fascie_repo)
    {
        $delete = $fascie_repo->remove($id);

        return 'true';
    }

}
