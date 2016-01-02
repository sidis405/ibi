<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class SchedeSegnalazione extends Model
{
    protected $table = 'schede_segnalazione';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
