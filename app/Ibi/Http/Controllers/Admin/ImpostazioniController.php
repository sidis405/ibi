<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Models\Options;
use Ibi\Repositories\ImpostazioniRepo;
use Illuminate\Http\Request;


class ImpostazioniController extends AdminController
{

    /**
     * Show the form for editing the specified News.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ImpostazioniRepo $impostazioni_repo)
    {
        $impostazioni = $impostazioni_repo->getById(1);

        return view('admin.impostazioni.edit', compact('impostazioni'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImpostazioniRepo $impostazioni_repo)
    {
        $options_object = Options::edit($request->input('external_user_mail'), $request->input('contenuto_update_mail'), $request->input('segnalazione_farmacovigilanza_mail'), $request->input('candidatura_mail'));
        
        $impostazioni_repo->save($options_object);

        return redirect()->to('/admin/impostazioni');
    }

}
