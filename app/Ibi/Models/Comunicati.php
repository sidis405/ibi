<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class Comunicati extends Model
{
    protected $table = 'comunicati';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function make($titolo, $descrizione, $testo, $active){

        $slug = str_slug(rtrim($titolo));

        $comunicato = new static(compact('titolo', 'slug', 'descrizione', 'testo', 'active'));

        return $comunicato;
    }

    public static function edit($comunicato_id, $titolo, $descrizione, $testo, $active){

        $slug = str_slug(rtrim($titolo));

        $comunicato = static::find($comunicato_id);

        $comunicato->titolo = $titolo;
        $comunicato->slug = $slug;
        $comunicato->descrizione = $descrizione;
        $comunicato->testo = $testo;
        $comunicato->active = $active;

        return $comunicato;
    }
}
