<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\SegnalazioniRepo;
use Illuminate\Http\Request;


class SegnalazioniController extends AdminController
{
    /**
     * Display a listing of the PosizioniAperte.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SegnalazioniRepo $segnalazioni_repo)
    {
        $segnalazioni = $segnalazioni_repo->getAll();

        return view('admin.farmaco-vigilanza.index', compact('segnalazioni'));

    }

    /**
     * Display the specified PosizioniAperte.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, SegnalazioniRepo $segnalazioni_repo)
    {
        $segnalazione = $segnalazioni_repo->getById($id);

        // return $segnalazione;

        return view('admin.farmaco-vigilanza.show', compact('segnalazione'));
    }

    /**
     * Remove the specified PosizioniAperte from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, SegnalazioniRepo $segnalazioni_repo)
    {
        $delete = $segnalazioni_repo->remove($id);

        return 'true';
    }


}
