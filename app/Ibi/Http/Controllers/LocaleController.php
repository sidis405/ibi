<?php

namespace Ibi\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Models\Languages;
use Illuminate\Http\Request;
use Session;


class LocaleController extends Controller
{

    public function setLocale($locale)
    {
        if(in_array($locale, array_pluck(Languages::all(), 'locale'))){
            Session::put('locale', $locale);
            // dd(Session::get('locale'));
            
        }

        return redirect()->back();
    }

}
