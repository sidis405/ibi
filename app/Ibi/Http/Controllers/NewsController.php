<?php

namespace Ibi\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\NewsRepo;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    

    /**
     * Display the specified News.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, NewsRepo $news_repo)
    {
        $news = $news_repo->getById($id);

        return $news;
    }
}
