<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $fillable = ['name', 'slug'];

    public function contenuti()
    {
        return $this->hasMany(Contenuti::class, 'pagina_id');
    }

    public static function make($name, $slug)
    {
        
        $pagina = new static(compact('name', 'slug'));

        return $pagina;
    }

    public static function edit($pagina_id, $name, $slug)
    {

        $pagina = static::find($pagina_id);

        $pagina->name = $name;
        $pagina->slug = $slug;

        return $pagina;
    }
}
