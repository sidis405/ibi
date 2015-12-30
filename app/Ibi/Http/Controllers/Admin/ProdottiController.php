<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\CategorieTerapeuticheRepo;
use Ibi\Repositories\FascieRepo;
use Ibi\Repositories\PaesiRepo;
use Ibi\Repositories\PrincipiAttiviRepo;
use Ibi\Repositories\ProdottiRepo;
use Ibi\Repositories\SezioniRepo;
use Illuminate\Http\Request;


class ProdottiController extends Controller
{
    /**
     * Display a listing of the CategorieTerapeutiche.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProdottiRepo $prodotti_repo)
    {
        $prodotti = $prodotti_repo->getAll();

        return view('admin.prodotti.index', compact('prodotti'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SezioniRepo $sezioni_repo, CategorieTerapeuticheRepo $categorie_terapeutiche_repo, PrincipiAttiviRepo $principi_attivi_repo, PaesiRepo $paesi_repo, FascieRepo $fascie_repo)
    {
        $sezioni = $sezioni_repo->getAll();
        $categorie_terapeutiche = $categorie_terapeutiche_repo->getAll();
        $principi_attivi = $principi_attivi_repo->getAll();
        $paesi = $paesi_repo->getAll();
        $fascie = $fascie_repo->getAll();

        return view('admin.prodotti.create', compact('sezioni', 'categorie_terapeutiche', 'principi_attivi', 'paesi', 'fascie'));
    }



    /**
     * Store a newly created CategorieTerapeutiche in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prodotto = $this->dispatchFrom('Ibi\Commands\Prodotti\CreateProdottoCommand', $request);
        
        return redirect()->to('/admin/prodotti');
    }

    /**
     * Display the specified CategorieTerapeutiche.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, ProdottiRepo $prodotti_repo)
    {
        $prodotto = $prodotti_repo->getById($id);

        return view('admin.prodotti.show', compact('prodotto'));
    }

    /**
     * Show the form for editing the specified CategorieTerapeutiche.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, ProdottiRepo $prodotti_repo, SezioniRepo $sezioni_repo, CategorieTerapeuticheRepo $categorie_terapeutiche_repo, PaesiRepo $paesi_repo, FascieRepo $fascie_repo)
    {
        $prodotto = $prodotti_repo->getById($id);
        $sezioni = $sezioni_repo->getAll();
        $categorie_terapeutiche = $prodotti_repo->getAll();
        $principi_attivi = $principi_attivi_repo->getAll();
        $paesi = $paesi_repo->getAll();
        $fascie = $fascie_repo->getAll();

        return view('admin.prodotti.edit', compact('prodotto', 'sezioni', 'principio_attivo', 'categorie_terapeutiche', 'paesi', 'fascie'));
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
        $paese = $this->dispatchFrom('Ibi\Commands\Prodotti\UpdateProdottoCommand', $request);

        flash()->success('News aggiornata correttamente.');

        return redirect()->to('/admin/prodotti');
    }

    /**
     * Remove the specified CategorieTerapeutiche from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, ProdottiRepo $prodotti_repo)
    {
        $delete = $prodotti_repo->remove($id);

        return 'true';
    }

}
