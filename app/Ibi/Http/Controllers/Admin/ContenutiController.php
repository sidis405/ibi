<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Models\Languages;
use Ibi\Repositories\ContenutiRepo;
use Ibi\Repositories\PagineRepo;
use Illuminate\Http\Request;


class ContenutiController extends AdminController
{
    /**
     * Display a listing of the Contenuti.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ContenutiRepo $contenuti_repo)
    {
        $contenuti = $contenuti_repo->getAll();

        return view('admin.contenuti.index', compact('contenuti'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PagineRepo $pagine_repo)
    {
        $lingue = Languages::all();
        $pagine = $pagine_repo->getAll();
        return view('admin.contenuti.create', compact('pagine', 'lingue'));
    }



    /**
     * Store a newly created Contenuti in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input();
        $contenuto = $this->dispatchFrom('Ibi\Commands\Contenuti\CreateContenutoCommand', $request);
        
        return redirect()->to('/admin/contenuti');
    }


    /**
     * Show the form for editing the specified Contenuti.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, ContenutiRepo $contenuti_repo, PagineRepo $pagine_repo)
    {
        $contenuto = $contenuti_repo->getById($id);
        $pagine = $pagine_repo->getAll();
        $lingue = Languages::all();

        $traduzioni = $contenuto->translations->keyBy('locale');

        // return $contenuto;

        return view('admin.contenuti.edit', compact('contenuto', 'pagine', 'lingue', 'traduzioni'));
    }

    /**
     * Update the specified Contenuti in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $contenuto = $this->dispatchFrom('Ibi\Commands\Contenuti\UpdateContenutoCommand', $request);

        flash()->success('Contenuti aggiornata correttamente.');

        return redirect()->to('/admin/contenuti');
    }

    /**
     * Remove the specified Contenuti from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, ContenutiRepo $contenuti_repo)
    {
        $delete = $contenuti_repo->remove($id);

        return 'true';
    }

}
