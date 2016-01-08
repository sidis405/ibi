<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Utils\FileUtility;
use Illuminate\Http\Request;
use Response;

class AllegatiController extends AdminController
{
    /**
     * Display the attachment for the specified Prodotti.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($type, $filename, FileUtility $file_utility)
    {
        $path = $type . '/' . rawurldecode($filename);

        $file = $file_utility->getFile($path);

        // return $file['mimetype'];

        if( ! $file) abort(406);

        return Response::make($file['contents'], 200, [
            'Content-Type' => $file['mimetype'],
            'Content-Disposition' => 'inline; '.$path,
        ]);
    }

}
