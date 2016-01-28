<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Ct extends Model
{
    use Translatable;

    public $translatedAttributes = ['nome', 'slug'];
    protected $fillable = ['nome', 'slug'];
    protected $table = 'ct';

    public function prodotti()
    {
        return $this->hasMany(Prodotti::class, 'categoria_terapeutica_id');
    }

    public function principi_attivi()
    {
        return $this->belongsToMany(Pa::class, 'categorie_principi', 'categoria_id', 'principio_id');
    }

    public static function make($nomi)
    {
        $categoria = new static();

        foreach($nomi as $locale => $nome)
        {
            $data[$locale] = ['nome' => $nome];
        }

        foreach($nomi as $locale => $nome)
        {
            $data[$locale] = ['slug' => str_slug($nome)];
        }
        // $categoria = new static(compact('nome', 'slug'));

        return $categoria;
    }

    public static function edit($categoria_id)
    {
        $categoria = static::find($categoria_id);

    
        return $categoria;
    }
}
