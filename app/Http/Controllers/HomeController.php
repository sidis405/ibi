<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\ListiniRepo;
use Ibi\Repositories\NewsRepo;
use Ibi\Repositories\PagineRepo;
use Ibi\Repositories\SezioniRepo;
use Ibi\Repositories\SliderRepo;
use Ibi\Repositories\CategorieTerapeuticheRepo;
use Ibi\Repositories\PrincipiAttiviRepo;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest', ['only' => 'area_riservata']);
    }

    public function home(NewsRepo $news_repo, PagineRepo $pagine_repo, SliderRepo $slider_repo)
    {
        $news = $news_repo->getAllFront();

        $sliders = $slider_repo->getAllFront();

        $contenuti = $pagine_repo->getContentForPage('index');

        return view('home.index', compact('news', 'contenuti', 'sliders'));
    }

    public function area_riservata()
    {
        return view('area-riservata.index');
    }

    public function chi_siamo(NewsRepo $news_repo, PagineRepo $pagine_repo)
    {
        $news = $news_repo->getAllFront();

        $contenuti = $pagine_repo->getContentForPage('chi-siamo');


        return view('pages.chi-siamo', compact('news', 'contenuti'));
    }

    public function ibi_toll_manufacturer(NewsRepo $news_repo, PagineRepo $pagine_repo)
    {
        $news = $news_repo->getAllFront();

        $contenuti = $pagine_repo->getContentForPage('ibi-toll-manufacturer');

        return view('pages.ibi-toll-manufacturer', compact('news', 'contenuti'));
    }

    public function reparti_toll_manufacturer(NewsRepo $news_repo, PagineRepo $pagine_repo)
    {
        $news = $news_repo->getAllFront();

        $contenuti = $pagine_repo->getContentForPage('ibi-toll-manufacturer');

        return view('pages.reparti-toll-manufacturer', compact('news', 'contenuti'));
    }

    public function ricerca_innovazione(NewsRepo $news_repo, PagineRepo $pagine_repo)
    {
        $news = $news_repo->getAllFront();

        $contenuti = $pagine_repo->getContentForPage('ricerca-innovazione');

        return view('pages.ricerca-innovazione', compact('news', 'contenuti'));
    }

    public function prodotti_export(ListiniRepo $listini_repo)
    {
        $listini = $listini_repo->getAllFront();
        return view('pages.prodotti-export', compact('listini'));
    }

    public function prodotti_ibisqus(ListiniRepo $listini_repo)
    {
        $listini = $listini_repo->getAllFront();
        return view('pages.prodotti-ibisqus', compact('listini'));
    }

    public function prodotti_italia(ListiniRepo $listini_repo, SezioniRepo $sezioni_repo, CategorieTerapeuticheRepo $categorie_repo, PrincipiAttiviRepo $principi_repo)
    {
        $listini = $listini_repo->getAllFront();
        $prodotti = $sezioni_repo->getBySlug('ibi-italia')->prodotti;

        $categorie = collect(array_pluck($prodotti, 'categoria_terapeutica'))->unique();
        // $categorie = $categorie_repo->getAllFront();
        // $principi = collect(array_pluck($categorie, 'principi_attivi')[0])->unique();
        $principi = $principi_repo->getAllFront();

        // return collect(array_collapse(array_pluck($categorie, 'principi_attivi')))->unique();

        $principi = collect(array_values(array_sort(array_collapse(array_pluck($categorie, 'principi_attivi')), function ($value) {
            return $value['nome'];
        })))->unique();

        // return $principi;

        return view('pages.prodotti-italia', compact('listini', 'prodotti', 'categorie', 'principi'));
    }

    public function ibi_export(PagineRepo $pagine_repo)
    {

        $contenuti = $pagine_repo->getContentForPage('ibi-export');
        return view('pages.ibi-export', compact('contenuti'));
    }

    public function ibi_italia(PagineRepo $pagine_repo)
    {

        $contenuti = $pagine_repo->getContentForPage('ibi-italia');
        return view('pages.ibi-italia', compact('contenuti'));
    }

    public function ibisqus_ospedale(PagineRepo $pagine_repo)
    {

        $contenuti = $pagine_repo->getContentForPage('ibisqus-ospedale');

        return view('pages.ibisqus-ospedale', compact('contenuti'));
    }

    public function contatti()
    {
        return view('pages.contatti');
    }

    public function benessere_del_paziente()
    {
        return view('pages.benessere-del-paziente');
    }

    public function privacy_policy()
    {
        return view('pages.privacy-policy');
    }

    public function pull()
    {
        $out = '';
        $result = array();
        $result = shell_exec("/usr/bin/git -c /home/www/sidrit.com/ibi pull 2>&1");
        return '<pre>' .$result.'</pre>';
    }


}
