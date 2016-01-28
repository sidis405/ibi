<?php

namespace Ibi\Repositories;

use Ibi\Models\Ct;

/**
* Categorie Terapeutiche Repo
*/
class CategorieTerapeuticheRepo
{
    public function save(Ct $categorieTerapeutica)
    {
        $categorieTerapeutica->save();

        return $categorieTerapeutica;
    }

    public function remove($id)
    {
        $categorieTerapeutica = $this->getById($id);

        if( count($categorieTerapeutica->prodotti ) > 0) return false;

        $categorieTerapeutica->principi_attivi()->sync([]);

        $categorieTerapeutica->delete();

        return true;
    }

    public function getAll()
    {
        return Ct::with('prodotti', 'principi_attivi')->get();
    } 

    public function getAllFront()
    {
        return Ct::with('principi_attivi')->get();
    }

    public function getById($id)
    {
        return Ct::where('id', $id)->with('prodotti', 'principi_attivi')->first();
    } 
}
