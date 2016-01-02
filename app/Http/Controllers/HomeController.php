<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{

    public function home()
    {
        return view('pages.index');
    }

    public function chi_siamo()
    {
        return view('pages.chi-siamo');
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

    public function ibi_toll_manufacturer()
    {
        return view('pages.ibi-toll-manufacturer');
    }

    public function ricerca_innovazione()
    {
        return view('pages.ricerca-innovazione');
    }

    public function contatti()
    {
        return view('pages.contatti');
    }

    public function lavora_con_noi()
    {
        return view('pages.lavora-con-noi');
    }

    public function invia_candidatura()
    {
        return view('pages.invia-candidatura');
    }

    public function farmaco_vigilanza()
    {
        return view('pages.farmaco-vigilanza');
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
