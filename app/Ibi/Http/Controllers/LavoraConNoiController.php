<?php

namespace Ibi\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\PosizioniAperteRepo;
use Illuminate\Http\Request;


class LavoraConNoiController extends Controller
{
    /**
     * Display a listing of the PosizioniAperte.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PosizioniAperteRepo $posizioni_aperte_repo)
    {
        $posizioni = $posizioni_aperte_repo->getAllFront();

        return view('lavora-con-noi.lavora-con-noi', compact('posizioni'));

    }

    public function invia_candidatura(PosizioniAperteRepo $posizioni_aperte_repo)
    {
        $posizioni = $posizioni_aperte_repo->getAllFront();

        return view('lavora-con-noi.invia-candidatura', compact('posizioni'));
    }

}
