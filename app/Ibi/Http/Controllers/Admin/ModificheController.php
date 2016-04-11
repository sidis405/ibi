<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\ModificheRepo;
use Illuminate\Http\Request;


class ModificheController extends AdminController
{
    /**
     * Display a listing of the User.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ModificheRepo $modifiche_repo)
    {
        $modifiche = $modifiche_repo->getAll()->toArray();

        // return $modifiche[0]->toArray()['base_contenuto_translation']['contenuto']['pagina']['name'];

        return view('admin.modifiche-contenuti.index', compact('modifiche'));

    }

    /**
     * Display the specified User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, ModificheRepo $modifiche_repo)
    {
        $mod = $modifiche_repo->getById($id);

        // return unserialize($mod['model_data'])['testo'];

        return view('admin.modifiche-contenuti.show', compact('mod'));
    }


    /**
     * Remove the specified User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function conferma($id, ModificheRepo $modifiche_repo)
    {
        $confirm = $modifiche_repo->activate($id);

        return redirect()->to('/admin/modifiche-contenuti-sito/');
        // return redirect()->to('/admin/modifiche-contenuti-sito/' . $id);
    }

    public function cancella($id, ModificheRepo $modifiche_repo)
    {
        $delete = $modifiche_repo->ignore($id);

        return redirect()->to('/admin/modifiche-contenuti-sito');
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
