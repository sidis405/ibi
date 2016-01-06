<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\ComunicatiRepo;
use Illuminate\Http\Request;


class ComunicatiController extends AdminController
{
    /**
     * Display a listing of the News.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ComunicatiRepo $comunicati_repo)
    {
        $comunicati = $comunicati_repo->getAll();

        return view('admin.comunicati.index', compact('comunicati'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comunicati.create');
    }



    /**
     * Store a newly created News in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input();
        $data = $this->manageUploads($request);

        $news = $this->dispatchFrom('Ibi\Commands\Comunicati\CreateComunicatoCommand', $request, $data);
        
        return redirect()->to('/admin/farmaco-vigilanza/comunicati');
    }

    /**
     * Display the specified News.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, ComunicatiRepo $comunicati_repo)
    {
        $comunicato = $comunicati_repo->getById($id);

        return $comunicato;

        return view('admin.comunicati.show', compact('comunicato'));
    }

    /**
     * Show the form for editing the specified News.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, ComunicatiRepo $comunicati_repo)
    {
        $comunicato = $comunicati_repo->getById($id);

        return view('admin.comunicati.edit', compact('comunicato'));
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

        $news = $this->dispatchFrom('Ibi\Commands\Comunicati\UpdateComunicatoCommand', $request, $data);

        flash()->success('News aggiornata correttamente.');

        return redirect()->to('/admin/farmaco-vigilanza/comunicati');
    }

    /**
     * Remove the specified News from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, ComunicatiRepo $comunicati_repo)
    {
        $delete = $comunicati_repo->remove($id);

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
