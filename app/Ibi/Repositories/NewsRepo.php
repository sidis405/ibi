<?php

namespace Ibi\Repositories;

use Ibi\Models\News;

/**
* News Repo
*/
class NewsRepo
{
    public function save(News $news)
    {
        $news->save();

        return $news;
    }

    public function remove($id)
    {
        $news = $this->getById($id);

        $news->delete();

        return true;
    }

    public function getAll()
    {
        return News::orderBy('created_at', 'DESC')->get();
    } 

    public function getAllFront()
    {
        return News::where('active', 1)->orderBy('created_at', 'DESC')->get();
    } 

    public function getById($id)
    {
        return News::where('id', $id)->first();
    } 
}
