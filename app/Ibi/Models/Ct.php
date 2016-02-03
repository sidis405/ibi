<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Ct extends Model
{
    use Translatable;

    public $translatedAttributes = ['nome', 'slug'];
    public $table = 'ct';
    public $guarded = ['id', 'created_at', 'updated_at'];

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

        $data = [];

        foreach($nomi as $locale => $nome)
        {
            $data[$locale]['nome'] = $nome;
        }

        foreach($nomi as $locale => $nome)
        {
            $data[$locale]['slug'] = str_slug($nome);
        }

        // dd($data);

        $categoria = new static($data);

        return $categoria;
    }

    public static function edit($categoria_id)
    {
        $categoria = static::find($categoria_id);

    
        return $categoria;
    }
}
