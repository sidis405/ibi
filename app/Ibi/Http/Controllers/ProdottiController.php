<?php

namespace Ibi\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\ListiniRepo;
use Ibi\Repositories\PagineRepo;
use Ibi\Repositories\SezioniRepo;
use Ibi\Repositories\CategorieTerapeuticheRepo;
use Ibi\Repositories\PrincipiAttiviRepo;
use Illuminate\Http\Request;


class ProdottiController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest', ['only' => 'area_riservata']);
    }

    

    public function prodotti_export(ListiniRepo $listini_repo, SezioniRepo $sezioni_repo, CategorieTerapeuticheRepo $categorie_repo, PrincipiAttiviRepo $principi_repo, PagineRepo $pagine_repo)
    {
        $prodotti_raw = $sezioni_repo->getBySlug('ibi-export')->prodotti;

        list($prodotti, $categorie, $principi, $principi_validi, $contenuti, $listini) = $this->sliceData('prodotti-export', $prodotti_raw, $pagine_repo, $listini_repo);

        return view('prodotti.prodotti-export', compact('listini', 'prodotti', 'categorie', 'principi', 'principi_validi', 'contenuti'));
    }


    public function prodotti_italia(ListiniRepo $listini_repo, SezioniRepo $sezioni_repo, CategorieTerapeuticheRepo $categorie_repo, PrincipiAttiviRepo $principi_repo, PagineRepo $pagine_repo)
    {
       
        $prodotti_raw = $sezioni_repo->getBySlug('ibi-italia')->prodotti;

        list($prodotti, $categorie, $principi, $principi_validi, $contenuti, $listini) = $this->sliceData('prodotti-italia', $prodotti_raw, $pagine_repo, $listini_repo);

        return view('prodotti.prodotti-italia', compact('listini', 'prodotti', 'categorie', 'principi', 'principi_validi', 'contenuti'));
    }


    public function prodotti_ibisqus(ListiniRepo $listini_repo, SezioniRepo $sezioni_repo, CategorieTerapeuticheRepo $categorie_repo, PrincipiAttiviRepo $principi_repo, PagineRepo $pagine_repo)
    {
        $prodotti_raw = $sezioni_repo->getBySlug('ibisqus-regno-unito')->prodotti;

        list($prodotti, $categorie, $principi, $principi_validi, $contenuti, $listini) = $this->sliceData('prodotti-ibisqus', $prodotti_raw, $pagine_repo, $listini_repo);

        return view('prodotti.prodotti-ibisqus', compact('listini', 'prodotti', 'categorie', 'principi', 'principi_validi', 'contenuti'));
    }


    public function prodotti_ibisqus_italia(ListiniRepo $listini_repo, SezioniRepo $sezioni_repo, CategorieTerapeuticheRepo $categorie_repo, PrincipiAttiviRepo $principi_repo, PagineRepo $pagine_repo)
    {
        $prodotti_raw = $sezioni_repo->getBySlug('ibisqus-italia')->prodotti;

        list($prodotti, $categorie, $principi, $principi_validi, $contenuti, $listini) = $this->sliceData('prodotti-ibisqus', $prodotti_raw, $pagine_repo, $listini_repo);

        return view('prodotti.prodotti-ibisqus-italia', compact('listini', 'prodotti', 'categorie', 'principi', 'principi_validi', 'contenuti'));
    }


    public function prodotti_ibisqus_germania(ListiniRepo $listini_repo, SezioniRepo $sezioni_repo, CategorieTerapeuticheRepo $categorie_repo, PrincipiAttiviRepo $principi_repo, PagineRepo $pagine_repo)
    {
        $prodotti_raw = $sezioni_repo->getBySlug('ibisqus-germania')->prodotti;

        list($prodotti, $categorie, $principi, $principi_validi, $contenuti, $listini) = $this->sliceData('prodotti-ibisqus', $prodotti_raw, $pagine_repo, $listini_repo);

        return view('prodotti.prodotti-ibisqus-germania', compact('listini', 'prodotti', 'categorie', 'principi', 'principi_validi', 'contenuti'));
    }


    public function prodotti_ibisqus_uk(ListiniRepo $listini_repo, SezioniRepo $sezioni_repo, CategorieTerapeuticheRepo $categorie_repo, PrincipiAttiviRepo $principi_repo, PagineRepo $pagine_repo)
    {
        $prodotti_raw = $sezioni_repo->getBySlug('ibisqus-regno-unito')->prodotti;

        list($prodotti, $categorie, $principi, $principi_validi, $contenuti, $listini) = $this->sliceData('prodotti-ibisqus', $prodotti_raw, $pagine_repo, $listini_repo);

        return view('prodotti.prodotti-ibisqus-uk', compact('listini', 'prodotti', 'categorie', 'principi', 'principi_validi', 'contenuti'));
    }

    private function sliceData($sezione, $prodotti_raw, $pagine_repo, $listini_repo)
    {

        $listini = $listini_repo->getAllFront();

        $contenuti = $pagine_repo->getContentForPage($sezione);

        $prodotti = [];

        foreach ($prodotti_raw as $prodotto) {
            $prodotti[strtoupper($prodotto['nome'])][] = $prodotto;
        }

        $categorie = collect(array_pluck(array_collapse($prodotti), 'categoria_terapeutica'))->unique();

        $principi_validi = array_pluck(collect(array_pluck(array_collapse($prodotti), 'principio_attivo'))->unique(), 'slug');

        $principi = collect(array_sort(array_pluck(array_collapse($prodotti), 'principio_attivo'), function ($value) {
            return $value['nome'];
        }))->unique();

        return array($prodotti, $categorie, $principi,  $principi_validi, $contenuti, $listini);
    }


}
