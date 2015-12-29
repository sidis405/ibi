<?php

namespace Ibi\Repositories;

use Ibi\Models\CategorieTerapeutiche;

/**
* Categorie Terapeutiche Repo
*/
class PrincipiAttiviRepo
{
    public function save(CategorieTerapeutiche $categorieTerapeutica)
    {
        $categorieTerapeutica->save();

        return $categorieTerapeutica;
    }

    public function remove($id)
    {
        $categorieTerapeutica = CategorieTerapeutiche::find($id);
        $categorieTerapeutica->delete();

        return true;
    }
}
