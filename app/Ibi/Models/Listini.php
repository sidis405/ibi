<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class Listini extends Model
{
    protected $table = 'listini';
    protected $fillable = ['titolo', 'slug', 'allegato'];

    public static function make($titolo){

        $slug = str_slug(rtrim($titolo));

        $listino = new static(compact('titolo', 'slug'));

        return $listino;
    }

    public static function edit($listino_id, $titolo){

        $slug = str_slug(rtrim($titolo));

        $listino = static::find($listino_id);

        $listino->titolo = $titolo;
        $listino->slug = $slug;

        return $listino;
    }
}
