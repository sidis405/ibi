<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\TdvRepo;
use Illuminate\Http\Request;


class TdvController extends AdminController
{
    /**
     * Display a listing of the News.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TdvRepo $tdv_repo)
    {
        $tdv = $tdv_repo->getAll();

        return view('admin.tdv.index', compact('tdv'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tdv.create');
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

        $tdv = $this->dispatchFrom('Ibi\Commands\Tdv\CreateTdvCommand', $request, $data);
        
        return redirect()->to('/admin/trasferimenti-di-valore');
    }


    /**
     * Show the form for editing the specified News.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, TdvRepo $tdv_repo)
    {
        $tdv = $tdv_repo->getById($id);

        // return $tdv;

        return view('admin.tdv.edit', compact('tdv'));
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

        $tdv = $this->dispatchFrom('Ibi\Commands\Tdv\UpdateTdvCommand', $request, $data);

        flash()->success('News aggiornata correttamente.');

        return redirect()->to('/admin/trasferimenti-di-valore');
    }

    /**
     * Remove the specified News from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, TdvRepo $tdv_repo)
    {
        $delete = $tdv_repo->remove($id);

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
