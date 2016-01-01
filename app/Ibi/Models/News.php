<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function make($titolo, $descrizione, $testo, $active){

        $slug = str_slug(rtrim($titolo));

        $news = new static(compact('titolo', 'slug', 'descrizione', 'testo', 'active'));

        return $news;
    }

    public static function edit($news_id, $titolo, $descrizione, $testo, $active){

        $slug = str_slug(rtrim($titolo));

        $news = static::find($news_id);

        $news->titolo = $titolo;
        $news->slug = $slug;
        $news->descrizione = $descrizione;
        $news->testo = $testo;
        $news->active = $active;

        return $news;
    }
}
