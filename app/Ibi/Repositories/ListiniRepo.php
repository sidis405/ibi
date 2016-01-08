<?php

namespace Ibi\Repositories;

use Ibi\Models\Listini;

/**
* News Repo
*/
class ListiniRepo 
{
    public function save(Listini $listino)
    {
        $listino->save();

        return $listino;
    }

    public function remove($id)
    {
        $listino = $this->getById($id);

        $listino->delete();

        return true;
    }

    public function getAll()
    {
        return Listini::orderBy('titolo', 'ASC')->get();
    } 

    public function getAllFront()
    {
        return Listini::orderBy('titolo', 'ASC')->get()->keyBy('slug');
    } 

    public function getById($id)
    {
        return Listini::where('id', $id)->first();
    } 
}
