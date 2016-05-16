<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Utils\FileUtility;
use Illuminate\Http\Request;
use Response;
use Storage;

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

    public function showExt($type, $filename, FileUtility $file_utility)
    {
        $path = $type . '/' . rawurldecode($filename);

        $file = $file_utility->getFile($path);

        // return $file['mimetype'];

        if( ! $file) abort(406);

        // return response()->file(storage_path() . "/uploads/" . $path, $filename);
        
        // return Response::make($file['contents'], 200, [
        //     'Content-Type' => $file['mimetype'],
        //     'Content-Disposition' => 'inline; '.$path,
        // ]);
        
        return Response::make(file_get_contents(storage_path() . "/uploads/" . $path, $filename), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }

}
