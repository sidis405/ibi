<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Contenuti extends Model
{
    use Translatable;

    public $translatedAttributes = ['testo'];

    protected $table = 'contenuti';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function pagina()
    {
        return $this->belongsTo(Pages::class, 'pagina_id');
    }
}
