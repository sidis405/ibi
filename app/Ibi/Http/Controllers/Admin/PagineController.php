<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\PagineRepo;
use Illuminate\Http\Request;


class PagineController extends AdminController
{
    /**
     * Display a listing of the Pages.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PagineRepo $pagine_repo)
    {
        $pagine = $pagine_repo->getAll();

        return view('admin.pagine.index', compact('pagine'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pagine.create');
    }



    /**
     * Store a newly created Pages in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pagina = $this->dispatchFrom('Ibi\Commands\Pagine\CreatePaginaCommand', $request);
        
        return redirect()->to('/admin/pagine');
    }


    /**
     * Show the form for editing the specified Pages.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, PagineRepo $pagine_repo)
    {
        $pagina = $pagine_repo->getById($id);

        return view('admin.pagine.edit', compact('pagina'));
    }

    /**
     * Update the specified Pages in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $pagina = $this->dispatchFrom('Ibi\Commands\Pagine\UpdatePaginaCommand', $request);

        flash()->success('Pages aggiornata correttamente.');

        return redirect()->to('/admin/pagine');
    }

    /**
     * Remove the specified Pages from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, PagineRepo $pagine_repo)
    {
        $delete = $pagine_repo->remove($id);

        return 'true';
    }

}
