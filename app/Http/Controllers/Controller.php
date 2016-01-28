<?php

namespace App\Http\Controllers;

use Ibi\Models\MenuItems;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Ibi\Repositories\PagineRepo;
use Session;
use Config;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     function __construct() {

        $pagine_repo = new PagineRepo();

        $contenuti_footer = $pagine_repo->getContentForPage('index');

        view()->share('contenuti_footer', $contenuti_footer);
        view()->share('user', \Auth()->user());
        view()->share('menu', MenuItems::all()->keyBy('slug'));

        if(Session::has('locale')){
            $locale = Session::get('locale');
        }else{
            $locale = 'it';
        }
        
        \App::setLocale($locale);

        view()->share('text', Config::get('traduzioni.'.$locale));

    }
}
