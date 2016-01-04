<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Contenuti extends Model
{
    use Translatable;

    public $translatedAttributes = ['testo'];

    protected $table = 'contenuti';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function pagina()
    {
        return $this->belongsTo(Pages::class, 'pagina_id');
    }

    public static function make($pagina_id, $slug, $descrizione, $testi)
    {
        $data = compact('pagina_id', 'slug', 'descrizione');

        foreach($testi as $locale => $testo)
        {
            $data[$locale] = ['testo' => $testo];
        }
        // dd($data);
        
        $contenuto = new static($data);

        return $contenuto;
    }

     public static function edit($contenuto_id, $pagina_id, $slug, $descrizione, $testi)
    {

        $contenuto = static::find($contenuto_id);

        $contenuto->pagina_id = $pagina_id;
        $contenuto->slug = $slug;
        $contenuto->descrizione = $descrizione;

        return $contenuto;
    }
}
