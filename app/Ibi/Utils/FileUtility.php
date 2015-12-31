<?php

namespace Ibi\Utils;

use Storage;

class FileUtility {

    protected $disk = 'uploads';
    protected $paths = ['foglietto' => 'foglietti_illustrativi', 'scheda' => 'schede_tecniche'];

    public function putfile($prodotto_id, $type, $file)
    {
        $filename = $this->makeFilename($prodotto_id, $type, $file);
        
        if(Storage::disk($this->disk)->put($filename, file_get_contents($file->getRealPath()))){
            return $filename;
        }

        return false;

    }

    public function getFile($path)
    {
        if(Storage::disk($this->disk)->has($path)){

            $mimetype = Storage::disk($this->disk)->has($path);
            $contents = Storage::disk($this->disk)->get($path);

            return ['mimetype' => $mimetype, 'contents' => $contents];

        }

        return false;
    }

    protected function makeFilename($prodotto_id, $type, $file )
    {
        return $this->paths[$type] . '/' . $this->makeId($prodotto_id) . '-' . $file->getClientOriginalName();
    }

    protected function makeId($prodotto_id)
    {
        return md5(bcrypt($prodotto_id . microtime()));
    }

}