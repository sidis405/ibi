<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    protected $table = 'candidature';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function make($posizione_id, $nome, $cognome, $email, $messaggio){

        $candidatura = new static(compact('candidatura_id', 'nome', 'cognome', 'email', 'messaggio'));

        return $candidatura;
    }

    public static function edit($candidatura_id, $posizione_id, $nome, $cognome, $email, $messaggio){

        $candidatura = static::find($candidatura_id);

        $candidatura->posizione_id = $posizione_id;
        $candidatura->nome = $nome;
        $candidatura->cognome = $cognome;
        $candidatura->email = $email;
        $candidatura->messaggio = $messaggio;

        return $candidatura;
    }

    public function posizione()
    {
        return $this->belongsTo(PosizioniAperte::class, 'posizione_id');
    }
}
