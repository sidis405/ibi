<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Contenuti extends Model
{
    use Translatable;

    public $translatedAttributes = ['name'];

    protected $table = 'testo';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
