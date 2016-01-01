<?php

namespace Ibi\Http\Controllers\Admin;

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
        $posizioni = $posizioni_aperte_repo->getAll();

        return view('admin.lavora-con-noi.index', compact('posizioni'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lavora-con-noi.create');
    }



    /**
     * Store a newly created PosizioniAperte in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input();
        $data = $this->manageUploads($request);

        $PosizioniAperte = $this->dispatchFrom('Ibi\Commands\PosizioniAperte\CreatePosizioneApertaCommand', $request, $data);
        
        return redirect()->to('/admin/lavora-con-noi');
    }

    /**
     * Display the specified PosizioniAperte.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, PosizioniAperteRepo $posizioni_aperte_repo)
    {
        $posizione = $posizioni_aperte_repo->getById($id);

        return view('admin.lavora-con-noi.show', compact('posizione'));
    }

    /**
     * Show the form for editing the specified PosizioniAperte.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, PosizioniAperteRepo $posizioni_aperte_repo)
    {
        $posizione = $posizioni_aperte_repo->getById($id);

        return view('admin.lavora-con-noi.edit', compact('posizione'));
    }

    /**
     * Update the specified PosizioniAperte in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->manageUploads($request);

        $posizione = $this->dispatchFrom('Ibi\Commands\PosizioniAperte\UpdatePosizioneApertaCommand', $request, $data);

        flash()->success('PosizioniAperte aggiornata correttamente.');

        return redirect()->to('/admin/lavora-con-noi');
    }

    /**
     * Remove the specified PosizioniAperte from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, PosizioniAperteRepo $posizioni_aperte_repo)
    {
        $delete = $posizioni_aperte_repo->remove($id);

        return 'true';
    }

    protected function manageUploads($request)
    {
        $data = [];

        if($request->has('active'))
        {
            $data['active'] = $request->input('active');
        }else{
            $data['active'] = 0;
        }

        return $data;
    }

}
