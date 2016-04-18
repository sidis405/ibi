<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\CandidatureRepo;
use Illuminate\Http\Request;


class CandidatureController extends AdminController
{
    /**
     * Display a listing of the PosizioniAperte.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CandidatureRepo $candidature_repo)
    {
        $candidature = $candidature_repo->getAll();

        // return $candidature;

        return view('admin.lavora-con-noi.index_candidature', compact('candidature'));

    }

    /**
     * Display the specified PosizioniAperte.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, CandidatureRepo $candidature_repo)
    {
        $candidatura = $candidature_repo->getById($id);

        // return $candidatura;

        return view('admin.lavora-con-noi.show_candidature', compact('candidatura'));
    }

    /**
     * Remove the specified PosizioniAperte from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, CandidatureRepo $candidature_repo)
    {
        $delete = $candidature_repo->remove($id);

        return 'true';
    }


}
