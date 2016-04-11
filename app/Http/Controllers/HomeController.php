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
use Session;

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

        // return $contenuti['home_ibi_export_box'];
        // return get_class($contenuti['home_ibi_export_box']);

        return view('home.index', compact('news', 'contenuti', 'sliders'));
    }

    public function area_riservata()
    {
        return view('area-riservata.index');
    }

    public function chi_siamo(NewsRepo $news_repo, PagineRepo $pagine_repo)
    {
        $news = $news_repo->getAllFront();

        Session::put('currentPage', 'chi-siamo');

        // dd(\Session::get('currentPage'));

        $contenuti = $pagine_repo->getContentForPage('chi-siamo');


        return view('pages.chi-siamo', compact('news', 'contenuti'));
    }

    public function tdv(NewsRepo $news_repo, PagineRepo $pagine_repo)
    {
        $news = $news_repo->getAllFront();

        $contenuti = $pagine_repo->getContentForPage('trasferimenti-di-valore');

        // return $contenuti;

        return view('pages.trasferimenti-di-valore', compact('news', 'contenuti'));
    }

    public function ibi_toll_manufacturer(NewsRepo $news_repo, PagineRepo $pagine_repo)
    {
        $news = $news_repo->getAllFront();

        Session::put('currentPage', 'ibi-toll-manufacturer');


        $contenuti = $pagine_repo->getContentForPage('ibi-toll-manufacturer');

       

        return view('pages.ibi-toll-manufacturer', compact('news', 'contenuti'));
    }

    public function reparti_toll_manufacturer(NewsRepo $news_repo, PagineRepo $pagine_repo)
    {
        $news = $news_repo->getAllFront();

        Session::put('currentPage', 'ibi-toll-manufacturer');

        $contenuti = $pagine_repo->getContentForPage('ibi-toll-manufacturer');

        return view('pages.reparti-toll-manufacturer', compact('news', 'contenuti'));
    }

    public function ricerca_innovazione(NewsRepo $news_repo, PagineRepo $pagine_repo)
    {
        $news = $news_repo->getAllFront();

        Session::put('currentPage', 'ricerca-innovazione');

        $contenuti = $pagine_repo->getContentForPage('ricerca-innovazione');

        return view('pages.ricerca-innovazione', compact('news', 'contenuti'));
    }

    

    public function ibi_export(PagineRepo $pagine_repo, NewsRepo $news_repo)
    {
        $news = $news_repo->getAllFront();
        $contenuti = $pagine_repo->getContentForPage('ibi-export');

        Session::put('currentPage', 'prodotti');

        return view('pages.ibi-export', compact('contenuti', 'news'));
    }

    public function ibi_italia(PagineRepo $pagine_repo, NewsRepo $news_repo)
    {
        $news = $news_repo->getAllFront();
        $contenuti = $pagine_repo->getContentForPage('ibi-italia');

        Session::put('currentPage', 'prodotti');

        return view('pages.ibi-italia', compact('contenuti', 'news'));
    }

    public function ibisqus_ospedale(PagineRepo $pagine_repo, NewsRepo $news_repo)
    {
        $news = $news_repo->getAllFront();
        $contenuti = $pagine_repo->getContentForPage('ibisqus-ospedale');

        Session::put('currentPage', 'prodotti');
        

        return view('pages.ibisqus-ospedale', compact('contenuti', 'news'));
    }

    public function contatti(PagineRepo $pagine_repo)
    {
        Session::put('currentPage', 'contatti');


        $contenuti = $pagine_repo->getContentForPage('contatti');
        return view('pages.contatti', compact('contenuti'));
    }

    public function benessere_del_paziente(NewsRepo $news_repo, PagineRepo $pagine_repo)
    {
        Session::put('currentPage', 'prodotti');

        $news = $news_repo->getAllFront();
        $contenuti = $pagine_repo->getContentForPage('benessere-del-paziente');
        return view('pages.benessere-del-paziente', compact('news', 'contenuti'));
    }

    public function privacy_policy(NewsRepo $news_repo, PagineRepo $pagine_repo)
    {
        $contenuti = $pagine_repo->getContentForPage('privacy-policy');
        $news = $news_repo->getAllFront();
        return view('pages.privacy-policy', compact('contenuti', 'news'));
    }

    public function pull()
    {
        $out = '';
        $result = array();
        $result = shell_exec("/usr/bin/git -c /home/www/sidrit.com/ibi pull 2>&1");
        return '<pre>' .$result.'</pre>';
    }


}
