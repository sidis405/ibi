<?php

namespace Ibi\Repositories;

use Ibi\Models\Comunicati;

/**
* News Repo
*/
class ComunicatiRepo
{
    public function save(Comunicati $comunicato)
    {
        $comunicato->save();

        return $comunicato;
    }

    public function remove($id)
    {
        $comunicato = $this->getById($id);

        $comunicato->delete();

        return true;
    }

    public function getAll()
    {
        return Comunicati::orderBy('created_at', 'DESC')->get();
    } 

    public function getAllFront()
    {
        return Comunicati::where('active', 1)->orderBy('created_at', 'DESC')->get();
    } 

    public function getById($id)
    {
        return Comunicati::where('id', $id)->first();
    } 
}
