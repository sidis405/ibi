<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\NewsRepo;
use Ibi\Repositories\PagineRepo;
use Ibi\Repositories\SliderRepo;
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

    public function chi_siamo(NewsRepo $news_repo)
    {
        $news = $news_repo->getAllFront();
        return view('pages.chi-siamo', compact('news'));
    }

    public function ibi_toll_manufacturer(NewsRepo $news_repo)
    {
        $news = $news_repo->getAllFront();
        return view('pages.ibi-toll-manufacturer', compact('news'));
    }

    public function ricerca_innovazione(NewsRepo $news_repo)
    {
        $news = $news_repo->getAllFront();
        return view('pages.ricerca-innovazione', compact('news'));
    }

    public function prodotti_export()
    {
        return view('pages.prodotti-export');
    }

    public function prodotti_ibisqus()
    {
        return view('pages.prodotti-ibisqus');
    }

    public function prodotti_italia()
    {
        return view('pages.prodotti-italia');
    }

    public function ibi_export()
    {
        return view('pages.ibi-export');
    }

    public function ibi_italia()
    {
        return view('pages.ibi-italia');
    }

    public function ibisqus_ospedale()
    {
        return view('pages.ibisqus-ospedale');
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
