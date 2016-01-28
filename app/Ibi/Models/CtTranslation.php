<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class CtTranslation extends Model {

    public $timestamps = false;

    protected $fillable = ['nome', 'slug'];

}
