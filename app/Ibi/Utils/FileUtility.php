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
                        'cv' => 
                            [
                                'folder' => 'cv',
                                'disk' => 'uploads'
                            ],
                        'news_immagine' => 
                            [
                                'folder' => 'news',
                                'disk' => 'public_images'
                            ],

                        'news_allegati' => 
                            [
                                'folder' => 'news',
                                'disk' => 'public_allegati'
                            ],

                        'comunicati_allegati' => 
                            [
                                'folder' => 'comunicati',
                                'disk' => 'public_allegati'
                            ],
                        'listini_allegati' => 
                            [
                                'folder' => 'listini',
                                'disk' => 'public_allegati'
                            ],

                        'schede_allegati' => 
                            [
                                'folder' => 'schede',
                                'disk' => 'public_allegati'
                            ],

                        'slider_immagine' => 
                            [
                                'folder' => 'slider',
                                'disk' => 'public_images'
                            ]

                        ];

    public function putfile($prodotto_id, $type, $file, $data = [])
    {
        $filename = $this->makeFilename($prodotto_id, $type, $file, $data);
        
        if(Storage::disk($this->paths[$type]['disk'])->put($filename, file_get_contents($file->getRealPath()))){
            return $filename;
        }

        return false;

    }

    public function getFile($path)
    {
        if(Storage::disk('uploads')->has($path)){

            $mimetype = Storage::disk('uploads')->mimeType($path);
            $contents = Storage::disk('uploads')->get($path);

            return ['mimetype' => $mimetype, 'contents' => $contents];

        }

        return false;
    }

    protected function makeFilename($prodotto_id, $type, $file , $data)
    {
        if(count($data) > 0 && ($type === 'scheda' || $type==="foglietto"))
        {
            $product_scheda_slug = str_slug($data['nome']) . '-' . str_slug($data['formulazione']);

            return $this->paths[$type]['folder'] . '/' . $type. '-' . $product_scheda_slug  . '-' . $this->makeId($prodotto_id) . '-' . $file->getClientOriginalName();
        }

        return $this->paths[$type]['folder'] . '/' . $type. '-' . $this->makeId($prodotto_id) . '-' . $file->getClientOriginalName();
    }

    protected function makeId($prodotto_id)
    {
        return md5(bcrypt($prodotto_id . microtime()));
    }

}