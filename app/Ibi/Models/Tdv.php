<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class Tdv extends Model
{
    protected $table = 'tdv';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function make($titolo, $active){

        $scheda = new static(compact('titolo', 'active'));

        return $scheda;
    }

    public static function edit($scheda_id, $titolo, $active){


        $scheda = static::find($scheda_id);

        $scheda->titolo = $titolo;
        $scheda->active = $active;

        return $scheda;
    }
}
