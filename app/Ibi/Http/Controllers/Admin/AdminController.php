<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Ibi\Models\Version;


class AdminController extends Controller
{
    function __construct() {
        parent::__construct();


        $utenti_in_attesa = User::with('roles', 'profile.provincia_albo_rel', 'profile.specializzazione_rel')->whereHas('roles' , function($q){
                    $q->where('name', '=', 'Medico')->orWhere('name', '=', 'Farmacista');
                })->where('active', 0)->orderBy('first_name')->get();

        $modifiche_in_attesa = Version::with('user')->where('hide', 0)->where('active', 0)->where('seen', 0)->latest()->get();

        // dd($modifiche_in_attesa->toArray());

        view()->share('lista_utenti_in_attesa', $utenti_in_attesa);
        view()->share('count_utenti_in_attesa', count($utenti_in_attesa));

        view()->share('lista_modifiche_in_attesa', $modifiche_in_attesa);
        view()->share('count_modifiche_in_attesa', count($modifiche_in_attesa));

    }

}
