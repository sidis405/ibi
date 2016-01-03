<?php

namespace Ibi\Repositories;

use Ibi\Models\SchedeSegnalazione;

/**
* News Repo
*/
class SchedeSegnalazioneRepo 
{
    public function save(SchedeSegnalazione $scheda)
    {
        $scheda->save();

        return $scheda;
    }

    public function remove($id)
    {
        $scheda = $this->getById($id);

        $scheda->delete();

        return true;
    }

    public function getAll()
    {
        return SchedeSegnalazione::orderBy('created_at', 'DESC')->get();
    } 

    public function getAllFront()
    {
        return SchedeSegnalazione::where('active', 1)->orderBy('created_at', 'DESC')->get();
    } 

    public function getById($id)
    {
        return SchedeSegnalazione::where('id', $id)->first();
    } 
}
