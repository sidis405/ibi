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

    public function getBySlug($slug)
    {
        // return Pages::with('contenuti.translations.versions')->where('slug', $slug)->first();
        
        return Pages::with('contenuti')->where('slug', $slug)->first();
    } 

    public function getContentForPage($slug)
    {
        return $this->getBySlug($slug)->contenuti->keyBy('slug');
    }
}
