<?php

namespace Ibi\Repositories;

use Ibi\Models\Fascie;

/**
* Categorie Terapeutiche Repo
*/
class FascieRepo
{
    public function save(Fascie $fascia)
    {
        $fascia->save();

        return $fascia;
    }

    public function remove($id)
    {
        $fascia = $this->getById($id);

        if( count($fascia->prodotti ) > 0) return false;

        $fascia->delete();

        return true;
    }

    public function getAll()
    {
        return Fascie::with('prodotti')->orderBy('nome')->get();
    } 

    public function getById($id)
    {
        return Fascie::where('id', $id)->with('prodotti')->first();
    } 

}
