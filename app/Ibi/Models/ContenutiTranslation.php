<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;
use Ibi\Models\VersionableTrait;

class ContenutiTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['testo'];

    use VersionableTrait;

}
