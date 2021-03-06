<?php

namespace Ibi\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\PagineRepo;
use Ibi\Repositories\PosizioniAperteRepo;
use Ibi\Repositories\StaffInfoRepo;
use Ibi\Requests\SendCandidaturaRequest;
use Illuminate\Http\Request;
use Session;

class LavoraConNoiController extends Controller
{
    /**
     * Display a listing of the PosizioniAperte.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PosizioniAperteRepo $posizioni_aperte_repo, PagineRepo $pagine_repo, StaffInfoRepo $staff_info)
    {
        $posizioni = $posizioni_aperte_repo->getAllFront();
        $contenuti = $pagine_repo->getContentForPage('lavora-con-noi');
        $staff_info = $staff_info->getAllFront();

        // return $contenuti['lavora_con_noi_main'];

        return view('lavora-con-noi.lavora-con-noi', compact('posizioni', 'contenuti', 'staff_info'));

    }

    public function invia_candidatura(PosizioniAperteRepo $posizioni_aperte_repo)
    {
        $posizioni = $posizioni_aperte_repo->getAllFront();
        $id = 0;

        Session::put('currentPage', 'contatti');


        return view('lavora-con-noi.invia-candidatura', compact('posizioni', 'id'));
    }

    public function invia_candidatura_selected($id, $slug, PosizioniAperteRepo $posizioni_aperte_repo)
    {
        $posizioni = $posizioni_aperte_repo->getAllFront();

        Session::put('currentPage', 'contatti');


        return view('lavora-con-noi.invia-candidatura', compact('posizioni', 'id'));
    }

    public function store(SendCandidaturaRequest $request)
    {
        // return $request->input();
        $data = $this->manageUploads($request);

        // return $data;
        Session::put('currentPage', 'contatti');
        

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
