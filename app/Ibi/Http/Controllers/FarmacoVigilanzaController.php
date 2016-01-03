<?php

namespace Ibi\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\ComunicatiRepo;
use Ibi\Repositories\SchedeSegnalazioneRepo;
use Illuminate\Http\Request;


class FarmacoVigilanzaController extends Controller
{
    /**
     * Display a listing of the PosizioniAperte.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ComunicatiRepo $comunicati_repo, SchedeSegnalazioneRepo $schede_repo)
    {
        $comunicati = $comunicati_repo->getAllFront();
        $schede = $schede_repo->getAllFront();

        return view('farmaco-vigilanza.index', compact('comunicati', 'schede'));

    }

    public function comunicato($id, $slug, ComunicatiRepo $comunicati_repo)
    {
        $comunicato = $comunicati_repo->getById($id);

        return $comunicato;

    }

}
