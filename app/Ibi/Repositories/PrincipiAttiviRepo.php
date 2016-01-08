<?php

namespace Ibi\Repositories;

use Ibi\Models\PrincipiAttivi;

/**
* Principi Attivi Repo
*/
class PrincipiAttiviRepo
{
    public function save(PrincipiAttivi $principioAttivo)
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
        return PrincipiAttivi::with('prodotti', 'categorie_terapeutiche')->orderBy('nome')->get();
    } 

    public function getAllFront()
    {
        return PrincipiAttivi::orderBy('nome')->get();
    } 

    public function getById($id)
    {
        return PrincipiAttivi::where('id', $id)->with('prodotti', 'categorie_terapeutiche')->first();
    } 
}
