<?php

namespace Ibi\Repositories;

use Ibi\Models\Pages;

/**
* Pagine Repo
*/
class PagineRepo
{
    public function save(Pages $page)
    {
        $page->save();

        return $page;
    }

    public function remove($id)
    {
        $page = $this->getById($id);

        $page->delete();

        return true;
    }

    public function getAll()
    {
        return Pages::with('contenuti')->orderBy('name', 'ASC')->get();
    } 

    public function getAllFront()
    {
        return Pages::orderBy('name', 'ASC')->get();
    } 

    public function getById($id)
    {
        return Pages::where('id', $id)->first();
    } 
}
