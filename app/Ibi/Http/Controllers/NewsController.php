<?php

namespace Ibi\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\NewsRepo;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    
    public function index(NewsRepo $news_repo)
    {
        $news = $news_repo->getAllFront();
        $listing = $news_repo->getAllListing();

        return view('archivio_news.index', compact('news', 'listing'));
    }

    /**
     * Display the specified News.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, NewsRepo $news_repo)
    {
        $single_news = $news_repo->getById($id);

        $news = $news_repo->getAllFront();

        return view('archivio_news.show', compact('news', 'single_news'));
    }
}
