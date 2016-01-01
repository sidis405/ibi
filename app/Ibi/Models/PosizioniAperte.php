<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class PosizioniAperte extends Model
{
    protected $table = 'posizioni_aperte';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function make($titolo, $sede, $descrizione, $active){

        $slug = str_slug(rtrim($titolo) . ' ' . rtrim($sede));

        $posizione = new static(compact('titolo', 'slug', 'sede', 'descrizione', 'active'));

        return $posizione;
    }

    public static function edit($posizione_id, $titolo, $sede, $descrizione, $active){

        $slug = str_slug(rtrim($titolo) . ' ' . rtrim($sede));

        $posizione = static::find($posizione_id);

        $posizione->titolo = $titolo;
        $posizione->slug = $slug;
        $posizione->sede = $sede;
        $posizione->descrizione = $descrizione;
        $posizione->active = $active;

        return $posizione;
    }

    public function candidature()
    {
        return $this->hasMany(Candidature::class, 'posizione_id');
    }
}
