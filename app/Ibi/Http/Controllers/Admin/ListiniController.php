<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\ListiniRepo;
use Illuminate\Http\Request;


class ListiniController extends AdminController
{
    /**
     * Display a listing of the News.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ListiniRepo $listini_repo)
    {
        $listini = $listini_repo->getAll();

        return view('admin.listini.index', compact('listini'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.listini.create');
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

        $listino = $this->dispatchFrom('Ibi\Commands\Listini\CreateListinoCommand', $request, $data);
        
        return redirect()->to('/admin/prodotti/listini-prodoti');
    }


    /**
     * Show the form for editing the specified News.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, ListiniRepo $listini_repo)
    {
        $listino = $listini_repo->getById($id);

        return view('admin.listini.edit', compact('listino'));
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

        $listino = $this->dispatchFrom('Ibi\Commands\Listini\UpdateListinoCommand', $request, $data);

        flash()->success('News aggiornata correttamente.');

        return redirect()->to('/admin/prodotti/listini-prodoti');
    }

    /**
     * Remove the specified News from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, ListiniRepo $listini_repo)
    {
        $delete = $listini_repo->remove($id);

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

        return $data;
    }

}
