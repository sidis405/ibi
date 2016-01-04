<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;
use Mpociot\Versionable\VersionableTrait;

class ContenutiTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['testo'];

    use VersionableTrait;

}
