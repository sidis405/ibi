<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{

    protected $table = 'options';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function edit($external_user_mail, $contenuto_update_mail, $segnalazione_farmacovigilanza_mail, $candidatura_mail){

        $options = static::find(1);

        $options->external_user_mail                 = $external_user_mail;
        $options->contenuto_update_mail              = $contenuto_update_mail;
        $options->segnalazione_farmacovigilanza_mail = $segnalazione_farmacovigilanza_mail;
        $options->candidatura_mail                   = $candidatura_mail;

        return $options;
    }
}
