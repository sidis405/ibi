<?php

namespace Ibi\Repositories;

use Ibi\Models\Pa;

/**
* Principi Attivi Repo
*/
class PrincipiAttiviRepo
{
    public function save(Pa $principioAttivo)
    {
        $principioAttivo->save();

        return $principioAttivo;
    }

    public function remove($id)
    {
        $principioAttivo = $this->getById($id);

        if( count($principioAttivo->prodotti ) > 0) return false;

        $principioAttivo->categorie_terapeutiche()->sync([]);

        $principioAttivo->delete();

        return true;
    }

    public function getAll()
    {
        return Pa::with('prodotti', 'categorie_terapeutiche')->get();
    } 

    public function getAllFront()
    {
        return Pa::orderBy('nome')->get();
    } 

    public function getById($id)
    {
        return Pa::where('id', $id)->with('prodotti', 'categorie_terapeutiche')->first();
    } 
}
