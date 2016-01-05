<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;
use Ibi\Models\VersionableTrait;

class SliderTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['titolo', 'sottotitolo'];

    use VersionableTrait;

}
