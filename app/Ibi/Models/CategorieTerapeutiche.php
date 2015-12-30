<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class CategorieTerapeutiche extends Model
{
    protected $fillable = ['nome', 'slug'];
    protected $table = 'categorie_terapeutiche';

    public function prodotti()
    {
        return $this->hasMany(Prodotti::class, 'categoria_terapeutica_id');
    }

    public function principi_attivi()
    {
        return $this->belongsToMany(PrincipiAttivi::class, 'categorie_principi', 'categoria_id', 'principio_id');
    }

    public static function make($nome)
    {
        $nome = rtrim($nome);
        $slug = str_slug($nome);
        
        $categoria = new static(compact('nome', 'slug'));

        return $categoria;
    }

    public static function edit($categoria_id, $nome)
    {
        $nome = rtrim($nome);

        $categoria = static::find($categoria_id);

        $categoria->nome = $nome;
        $categoria->slug = str_slug($nome);

        return $categoria;
    }
}
