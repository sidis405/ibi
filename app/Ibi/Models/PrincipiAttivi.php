<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class PrincipiAttivi extends Model
{
    protected $fillable = ['nome', 'slug'];
    protected $table = 'principi_attivi';

    public function prodotti()
    {
        return $this->hasMany(Prodotti::class, 'principio_attivo_id');
    }

    public function categorie_terapeutiche()
    {
        return $this->belongsToMany(CategorieTerapeutiche::class, 'categorie_principi', 'principio_id', 'categoria_id');
    }

    public static function make($nome)
    {
        $nome = rtrim($nome);
        $slug = str_slug($nome);
        
        $principio = new static(compact('nome', 'slug'));

        return $principio;
    }

    public static function edit($principio_id, $nome)
    {
        $nome = rtrim($nome);

        $principio = static::find($principio_id);

        $principio->nome = $nome;
        $principio->slug = str_slug($nome);

        return $principio;
    }
}
