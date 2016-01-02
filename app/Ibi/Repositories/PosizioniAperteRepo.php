<?php

namespace Ibi\Repositories;

use Ibi\Models\PosizioniAperte;

/**
* PosizioniAperte Repo
*/
class PosizioniAperteRepo
{
    public function save(PosizioniAperte $posizione)
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
        return PosizioniAperte::with('candidature')->orderBy('created_at', 'DESC')->get();
    } 

    public function getAllFront()
    {
        return PosizioniAperte::with('candidature')->where('active', 1)->orderBy('created_at', 'DESC')->get();
    } 

    public function getById($id)
    {
        return PosizioniAperte::where('id', $id)->with('candidature')->first();
    } 

    public function getBySlug($slug)
    {
        return PosizioniAperte::where('slug', $slug)->first();
    }
}
