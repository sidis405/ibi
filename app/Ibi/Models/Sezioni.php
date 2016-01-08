<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class Sezioni extends Model
{
    protected $table = 'sezioni';

    public function prodotti()
    {
        return $this->belongsToMany(Prodotti::class, 'prodotti_sezioni', 'sezione_id', 'prodotto_id')->orderBy('nome');
    }
}
