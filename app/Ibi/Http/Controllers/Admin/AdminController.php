<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    function __construct() {
        parent::__construct();

        $utenti_in_attesa = User::with('roles', 'profile.provincia_albo_rel', 'profile.specializzazione_rel')->whereHas('roles' , function($q){
                    $q->where('name', '=', 'Medico')->orWhere('name', '=', 'Farmacista');
                })->where('active', 0)->orderBy('first_name')->get();

        view()->share('lista_utenti_in_attesa', $utenti_in_attesa);
        view()->share('count_utenti_in_attesa', count($utenti_in_attesa));

    }

}
