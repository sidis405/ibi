<?php

namespace Ibi\Repositories;

use Ibi\Models\Tdv;

/**
* News Repo
*/
class TdvRepo 
{
    public function save(Tdv $tdv)
    {
        $tdv->save();

        return $tdv;
    }

    public function remove($id)
    {
        $tdv = $this->getById($id);

        $tdv->delete();

        return true;
    }

    public function getAll()
    {
        return Tdv::orderBy('created_at', 'DESC')->get();
    } 

    public function getAllFront()
    {
        return Tdv::where('active', 1)->orderBy('created_at', 'DESC')->first();
    } 

    public function getById($id)
    {
        return Tdv::where('id', $id)->first();
    } 
}
