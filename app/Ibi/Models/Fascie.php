<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class Fascie extends Model
{
    protected $fillable = ['nome', 'slug'];
    protected $table = 'fascie';

    public function prodotti()
    {
        return $this->hasMany(Prodotti::class, 'fascia_id');
    }

    public static function make($nome)
    {
        $nome = rtrim($nome);
        $slug = str_slug($nome);
        
        $fascia = new static(compact('nome', 'slug'));

        return $fascia;
    }

    public static function edit($fascia_id, $nome)
    {
        $nome = rtrim($nome);

        $fascia = static::find($fascia_id);

        $fascia->nome = $nome;
        $fascia->slug = str_slug($nome);

        return $fascia;
    }
}
