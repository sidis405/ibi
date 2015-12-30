<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\CategorieTerapeuticheRepo;
use Ibi\Repositories\PrincipiAttiviRepo;
use Illuminate\Http\Request;


class CategorieTerapeuticheController extends Controller
{
    /**
     * Display a listing of the CategorieTerapeutiche.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CategorieTerapeuticheRepo $categorie_terapeutiche_repo)
    {
        $categorie_terapeutiche = $categorie_terapeutiche_repo->getAll();

        return view('admin.categorie_terapeutiche.index', compact('categorie_terapeutiche'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PrincipiAttiviRepo $principi_attivi_repo)
    {
        $principi_attivi = $principi_attivi_repo->getAll();

        return view('admin.categorie_terapeutiche.create', compact('principi_attivi'));
    }



    /**
     * Store a newly created CategorieTerapeutiche in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria_terapeutica = $this->dispatchFrom('Ibi\Commands\CategorieTerapeutiche\CreateCategoriaTerapeuticaCommand', $request);
        
        return redirect()->to('/admin/categorie-terapeutiche');
    }

    /**
     * Display the specified CategorieTerapeutiche.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, CategorieTerapeuticheRepo $categorie_terapeutiche_repo)
    {
        $categoria_terapeutica = $categorie_terapeutiche_repo->getById($id);

        return view('admin.categorie_terapeutiche.show', compact('categoria_terapeutica'));
    }

    /**
     * Show the form for editing the specified CategorieTerapeutiche.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, CategorieTerapeuticheRepo $categorie_terapeutiche_repo, PrincipiAttiviRepo $principi_attivi_repo)
    {
        $categoria_terapeutica = $categorie_terapeutiche_repo->getById($id);

        $principi_attivi = $principi_attivi_repo->getAll();

        return view('admin.categorie_terapeutiche.edit', compact('categoria_terapeutica', 'principi_attivi'));
    }

    /**
     * Update the specified CategorieTerapeutiche in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request->input();

        $paese = $this->dispatchFrom('Ibi\Commands\CategorieTerapeutiche\UpdateCategoriaTerapeuticaCommand', $request);

        flash()->success('News aggiornata correttamente.');

        return redirect()->to('/admin/categorie-terapeutiche');
    }

    /**
     * Remove the specified CategorieTerapeutiche from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, CategorieTerapeuticheRepo $categorie_terapeutiche_repo)
    {
        $delete = $categorie_terapeutiche_repo->remove($id);

        return 'true';
    }

}
