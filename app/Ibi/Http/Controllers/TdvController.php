<?php

namespace Ibi\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\TdvRepo;
use Illuminate\Http\Request;


class TdvController extends Controller
{

    /**
     * Show the form for editing the specified News.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(TdvRepo $tdv_repo)
    {
        $tdv = $tdv_repo->getAllFront();

        // return $tdv;

        return view('tdv.show', compact('tdv'));
    }

}
