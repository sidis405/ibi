<?php

namespace App\Http\Controllers;

use Ibi\Models\MenuItems;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Session;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $menu_repo;

     function __construct() {


        view()->share('user', \Auth()->user());
        view()->share('menu', MenuItems::all()->keyBy('slug'));

        if(Session::has('locale')){
            $locale = Session::get('locale');
        }else{
            $locale = 'it';
        }
        
        \App::setLocale($locale);

    }
}
