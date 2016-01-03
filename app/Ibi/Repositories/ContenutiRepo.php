<?php

namespace Ibi\Repositories;

use Ibi\Models\Contenuti;

/**
* Pagine Repo
*/
class ContenutiRepo
{
    public function save(Contenuti $contenuto)
    {
        $contenuto->save();

        return $contenuto;
    }

    public function remove($id)
    {
        $contenuto = $this->getById($id);

        $contenuto->delete();

        return true;
    }

    public function getAll()
    {
        return Contenuti::with('pagina', 'translations')->orderBy('descrizione', 'ASC')->get();
    } 

    public function getAllFront()
    {
        return Contenuti::orderBy('descrizione', 'ASC')->get();
    } 

    public function getById($id)
    {
        return Contenuti::with('translations')->where('id', $id)->first();
    } 
}
