<?php

namespace Ibi\Repositories;

use Ibi\Models\Candidature;

/**
* Candidature Repo
*/
class CandidatureRepo
{
    public function save(Candidature $posizione)
    {
        $posizione->save();

        return $posizione;
    }

    public function remove($id)
    {
        $posizione = $this->getById($id);

        $posizione->delete();

        return true;
    }

    public function getAll()
    {
        return Candidature::with('posizione')->orderBy('created_at', 'DESC')->get();
    } 


    public function getById($id)
    {
        return Candidature::where('id', $id)->with('posizione')->first();
    } 

}
