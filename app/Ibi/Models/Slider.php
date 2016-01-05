<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class Slider extends Model
{
    use Translatable;

    public $translatedAttributes = ['titolo', 'sottotitolo'];

    protected $table = 'sliders';

    protected $guarded = ['id', 'creaated_at', 'updated_at'];

    public static function make($titoli, $sottotitoli, $link, $active){

        $data = compact('titolo', 'sottotitolo', 'link', 'active');

        foreach($titoli as $locale => $titolo)
        {
            $data[$locale]['titolo'] = $titolo;
        }

        foreach($sottotitoli as $locale => $sottotitolo)
        {
            $data[$locale]['sottotitolo'] = $sottotitolo;
        }

        $slider = new static($data);

        return $slider;
    }

    public static function edit($slider_id, $titolo, $sottotitolo, $link, $active){

        $slider = static::find($slider_id);

        $slider->link = $link;
        $slider->active = $active;

        return $slider;
    }
}
