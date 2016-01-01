<?php

namespace Ibi\Utils;

use Storage;

class FileUtility {

    // protected $paths = ['foglietto' => 'foglietti_illustrativi', 'scheda' => 'schede_tecniche'];
    
    protected $paths = ['foglietto' => 
                            [
                                'folder' => 'foglietti_illustrativi',
                                'disk' => 'uploads'
                            ], 
                        'scheda' => 
                            [
                                'folder' => 'schede_tecniche',
                                'disk' => 'uploads'
                            ],
                        'news_immagine' => 
                            [
                                'folder' => 'news',
                                'disk' => 'public_images'
                            ]
                        ];

    public function putfile($prodotto_id, $type, $file)
    {
        $filename = $this->makeFilename($prodotto_id, $type, $file);
        
        if(Storage::disk($this->paths[$type]['disk'])->put($filename, file_get_contents($file->getRealPath()))){
            return $filename;
        }

        return false;

    }

    public function getFile($path)
    {
        if(Storage::disk('uploads')->has($path)){

            $mimetype = Storage::disk('uploads')->has($path);
            $contents = Storage::disk('uploads')->get($path);

            return ['mimetype' => $mimetype, 'contents' => $contents];

        }

        return false;
    }

    protected function makeFilename($prodotto_id, $type, $file )
    {
        return $this->paths[$type]['folder'] . '/' . $this->makeId($prodotto_id) . '-' . $file->getClientOriginalName();
    }

    protected function makeId($prodotto_id)
    {
        return md5(bcrypt($prodotto_id . microtime()));
    }

}