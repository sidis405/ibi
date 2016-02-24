<?php

namespace Ibi\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\PagineRepo;
use Ibi\Repositories\PosizioniAperteRepo;
use Ibi\Requests\SendCandidaturaRequest;
use Illuminate\Http\Request;

class LavoraConNoiController extends Controller
{
    /**
     * Display a listing of the PosizioniAperte.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PosizioniAperteRepo $posizioni_aperte_repo, PagineRepo $pagine_repo)
    {
        $posizioni = $posizioni_aperte_repo->getAllFront();
        $contenuti = $pagine_repo->getContentForPage('lavora-con-noi');

        return view('lavora-con-noi.lavora-con-noi', compact('posizioni', 'contenuti'));

    }

    public function invia_candidatura(PosizioniAperteRepo $posizioni_aperte_repo)
    {
        $posizioni = $posizioni_aperte_repo->getAllFront();
        $id = 0;


        return view('lavora-con-noi.invia-candidatura', compact('posizioni', 'id'));
    }

    public function invia_candidatura_selected($id, $slug, PosizioniAperteRepo $posizioni_aperte_repo)
    {
        $posizioni = $posizioni_aperte_repo->getAllFront();


        return view('lavora-con-noi.invia-candidatura', compact('posizioni', 'id'));
    }

    public function store(SendCandidaturaRequest $request)
    {
        // return $request->input();
        $data = $this->manageUploads($request);

        // return $data;

        $candidatura = $this->dispatchFrom('Ibi\Commands\PosizioniAperte\CreateCandidaturaCommand', $request, $data);
        
        flash()->success('Candidatura inviata correttamente.');

        return redirect()->to('/lavora-con-noi/invia-candidatura');
    }

    protected function manageUploads($request)
    {
        $data = [];

        if($request->hasFile('cv_path'))
        {
            $data['cv_path'] = $request->file('cv_path');
        }else{
            $data['cv_path'] = false;
        }

        return $data;
    }

}
