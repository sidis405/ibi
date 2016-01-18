<?php

namespace Ibi\Repositories;

use Ibi\Models\Segnalazioni;

/**
* Segnalazioni Repo
*/
class SegnalazioniRepo
{
    public function save(Segnalazioni $segnalazione)
    {
        $segnalazione->save();

        return $segnalazione;
    }

    public function remove($id)
    {
        $segnalazione = $this->getById($id);

        $segnalazione->delete();

        return true;
    }

    public function getAll()
    {
        return Segnalazioni::orderBy('created_at', 'DESC')->get();
    } 


    public function getById($id)
    {
        return Segnalazioni::where('id', $id)->first();
    } 

}
