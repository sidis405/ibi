<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class Segnalazioni extends Model
{
    protected $table = 'segnalazioni';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function make($nome, $cognome, $dob, $email,  $segnalazione){


        $segnalazione = new static(compact('nome', 'cognome' , 'dob',  'email', 'segnalazione'));

        return $segnalazione;
    }

}
