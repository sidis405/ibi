<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Pa extends Model
{
    use Translatable;

    public $translatedAttributes = ['nome', 'slug'];

    protected $fillable = ['nome', 'slug'];
    protected $table = 'pa';

    public function prodotti()
    {
        return $this->hasMany(Prodotti::class, 'principio_attivo_id');
    }

    public function categorie_terapeutiche()
    {
        return $this->belongsToMany(Ct::class, 'categorie_principi', 'principio_id', 'categoria_id');
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

        $principio = new static($data);

        return $principio;
    }

    public static function edit($principio_id)
    {
        $principio = static::find($principio_id);

        return $principio;
    }
}
