<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Session;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     function __construct() {
        view()->share('user', \Auth()->user());

        if(Session::has('locale')){
            $locale = Session::get('locale');
        }else{
            $locale = 'it';
        }
        
        \App::setLocale($locale);

    }
}
