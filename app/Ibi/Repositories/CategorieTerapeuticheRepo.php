<?php

namespace Ibi\Repositories;

use Ibi\Models\CategorieTerapeutiche;

/**
* Categorie Terapeutiche Repo
*/
class CategorieTerapeuticheRepo
{
    public function save(CategorieTerapeutiche $categorieTerapeutica)
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
        return CategorieTerapeutiche::with('prodotti', 'principi_attivi')->orderBy('nome')->get();
    } 

    public function getById($id)
    {
        return CategorieTerapeutiche::where('id', $id)->with('prodotti', 'principi_attivi')->first();
    } 
}
