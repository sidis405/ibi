<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = ['id', 'updated_at'];

    public function allegati()
    {
        return $this->hasMany(Allegati::class, 'news_id');
    }

    public static function make($titolo, $descrizione, $testo, $active, $created_at){

        $slug = str_slug(rtrim($titolo));

        $news = new static(compact('titolo', 'slug', 'descrizione', 'testo', 'active', 'created_at'));

        return $news;
    }

    public static function edit($news_id, $titolo, $descrizione, $testo, $active, $created_at){

        $slug = str_slug(rtrim($titolo));

        $news = static::find($news_id);

        $news->titolo = $titolo;
        $news->slug = $slug;
        $news->descrizione = $descrizione;
        $news->testo = $testo;
        $news->active = $active;
        $news->created_at = $created_at;

        return $news;
    }
}
