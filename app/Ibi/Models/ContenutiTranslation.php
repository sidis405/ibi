<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;
// use Ibi\Models\VersionableTrait;

class ContenutiTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['testo'];

    use \Ibi\Models\VersionableTrait;

    public function getTestoAttribute($value)
    {
        // return $this->currentVersion();
        return unserialize($this->currentVersion()['model_data'])['testo'];
    }

    public function contenuto()
    {
        return $this->belongsTo(Contenuti::class, 'contenuti_id');
    }           

}
