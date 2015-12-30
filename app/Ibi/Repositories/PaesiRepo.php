<?php

namespace Ibi\Repositories;

use Ibi\Models\Paesi;

/**
* Paesi Repo
*/
class PaesiRepo
{
    public function save(Paesi $paese)
    {
        $paese->save();

        return $paese;
    }

    public function remove($id)
    {
        $paese = $this->getById($id);

        if( count($paese->prodotti ) > 0) return false;

        $paese->delete();

        return true;
    }

    public function getAll()
    {
        return Paesi::with('prodotti')->orderBy('nome')->get();
    } 

    public function getById($id)
    {
        return Paesi::where('id', $id)->with('prodotti')->first();
    } 
}
