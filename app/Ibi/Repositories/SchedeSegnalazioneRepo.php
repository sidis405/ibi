<?php

namespace Ibi\Repositories;

use Ibi\Models\SchedeSeglazioneRepo;

/**
* News Repo
*/
class SchedeSeglazioneRepo 
{
    public function save(SchedeSeglazione $scheda)
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
        return SchedeSeglazione::orderBy('created_at', 'DESC')->get();
    } 

    public function getAllFront()
    {
        return SchedeSeglazione::where('active', 1)->orderBy('created_at', 'DESC')->get();
    } 

    public function getById($id)
    {
        return SchedeSeglazione::where('id', $id)->first();
    } 
}
