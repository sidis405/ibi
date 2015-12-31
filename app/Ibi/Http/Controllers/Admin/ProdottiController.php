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
     * Display a listing of the Prodotti.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProdottiRepo $prodotti_repo)
    {
        $prodotti = $prodotti_repo->getAll();

        return view('admin.prodotti.index', compact('prodotti'));

    }

     /**
     * Show the form for creating a new Prodotti.
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
        $data = $this->manageUploads($request);

        $prodotto = $this->dispatchFrom('Ibi\Commands\Prodotti\CreateProdottoCommand', $request, $data);
        
        return redirect()->to('/admin/prodotti');
    }

    /**
     * Display the specified Prodotti.
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
     * Show the form for editing the specified Prodotti.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, ProdottiRepo $prodotti_repo, SezioniRepo $sezioni_repo, PrincipiAttiviRepo $principi_attivi_repo, CategorieTerapeuticheRepo $categorie_terapeutiche_repo, PaesiRepo $paesi_repo, FascieRepo $fascie_repo)
    {
        $prodotto = $prodotti_repo->getById($id);
        $sezioni = $sezioni_repo->getAll();
        $categorie_terapeutiche = $categorie_terapeutiche_repo->getAll();
        $principi_attivi = $principi_attivi_repo->getAll();
        $paesi = $paesi_repo->getAll();
        $fascie = $fascie_repo->getAll();
        return view('admin.prodotti.edit', compact('prodotto', 'sezioni', 'principi_attivi', 'categorie_terapeutiche', 'paesi', 'fascie'));
    }

    /**
     * Update the specified Prodotti in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $this->manageUploads($request);
        
        $prodotto = $this->dispatchFrom('Ibi\Commands\Prodotti\UpdateProdottoCommand', $request, $data);

        flash()->success('News aggiornata correttamente.');

        return redirect()->to('/admin/prodotti');
    }

    /**
     * Remove the specified Prodotti from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, ProdottiRepo $prodotti_repo)
    {
        $delete = $prodotti_repo->remove($id);

        return 'true';
    }

    protected function manageUploads($request)
    {
        $data = [];

        if($request->hasFile('foglietto_illustrativo'))
        {
            $data['foglietto_illustrativo'] = $request->file('foglietto_illustrativo');
        }else{
            $data['foglietto_illustrativo'] = false;
        }

        if($request->hasFile('foglietto_illustrativo'))
        {
            $data['scheda_tecnica'] = $request->file('scheda_tecnica');
        }else{
            $data['scheda_tecnica'] = false;
        }

        return $data;
    }

}