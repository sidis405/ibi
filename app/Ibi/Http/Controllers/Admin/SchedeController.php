<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\SchedeSegnalazioneRepo;
use Illuminate\Http\Request;


class SchedeController extends AdminController
{
    /**
     * Display a listing of the News.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SchedeSegnalazioneRepo $schede_repo)
    {
        $schede = $schede_repo->getAll();

        return view('admin.schede.index', compact('schede'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.schede.create');
    }



    /**
     * Store a newly created News in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->manageUploads($request);

        $scheda = $this->dispatchFrom('Ibi\Commands\Schede\CreateSchedaCommand', $request, $data);
        
        return redirect()->to('/admin/farmaco-vigilanza/schede');
    }


    /**
     * Show the form for editing the specified News.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, SchedeSegnalazioneRepo $schede_repo)
    {
        $scheda = $schede_repo->getById($id);

        return view('admin.schede.edit', compact('scheda'));
    }

    /**
     * Update the specified News in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $this->manageUploads($request);

        $scheda = $this->dispatchFrom('Ibi\Commands\Schede\UpdateSchedaCommand', $request, $data);

        flash()->success('News aggiornata correttamente.');

        return redirect()->to('/admin/farmaco-vigilanza/schede');
    }

    /**
     * Remove the specified News from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, SchedeSegnalazioneRepo $schede_repo)
    {
        $delete = $schede_repo->remove($id);

        return 'true';
    }

    protected function manageUploads($request)
    {
        $data = [];

        if($request->hasFile('allegato'))
        {
            $data['allegato'] = $request->file('allegato');
        }else{
            $data['allegato'] = false;
        }

        if($request->has('active'))
        {
            $data['active'] = $request->input('active');
        }else{
            $data['active'] = 0;
        }

        return $data;
    }

}
