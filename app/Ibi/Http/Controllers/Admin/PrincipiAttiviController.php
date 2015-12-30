<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\PrincipiAttiviRepo;
use Ibi\Repositories\CategorieTerapeuticheRepo;
use Illuminate\Http\Request;


class PrincipiAttiviController extends Controller
{
    /**
     * Display a listing of the CategorieTerapeutiche.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PrincipiAttiviRepo $principi_attivi_repo)
    {
        $principi_attivi = $principi_attivi_repo->getAll();

        return view('admin.principi_attivi.index', compact('principi_attivi'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CategorieTerapeuticheRepo $categorie_terapeutiche_repo)
    {
        $categorie_terapeutiche = $categorie_terapeutiche_repo->getAll();

        return view('admin.principi_attivi.create', compact('categorie_terapeutiche'));
    }



    /**
     * Store a newly created CategorieTerapeutiche in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $principio_attivo = $this->dispatchFrom('Ibi\Commands\PrincipiAttivi\CreatePrincipioAttivoCommand', $request);
        
        return redirect()->to('/admin/principi-attivi');
    }

    /**
     * Display the specified CategorieTerapeutiche.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, PrincipiAttiviRepo $principi_attivi_repo)
    {
        $principio_attivo = $principi_attivi_repo->getById($id);

        return view('admin.principi_attivi.show', compact('principio_attivo'));
    }

    /**
     * Show the form for editing the specified CategorieTerapeutiche.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, PrincipiAttiviRepo $principi_attivi_repo, CategorieTerapeuticheRepo $categorie_terapeutiche_repo)
    {
        $principio_attivo = $principi_attivi_repo->getById($id);

        $categorie_terapeutiche = $categorie_terapeutiche_repo->getAll();

        return view('admin.principi_attivi.edit', compact('principio_attivo', 'categorie_terapeutiche'));
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
        $paese = $this->dispatchFrom('Ibi\Commands\PrincipiAttivi\UpdatePrincipioAttivoCommand', $request);

        flash()->success('News aggiornata correttamente.');

        return redirect()->to('/admin/principi-attivi');
    }

    /**
     * Remove the specified CategorieTerapeutiche from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, PrincipiAttiviRepo $principi_attivi_repo)
    {
        $delete = $principi_attivi_repo->remove($id);

        return 'true';
    }

}
