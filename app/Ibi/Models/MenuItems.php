<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;
use Dimsav\Translatable\Translatable;

class MenuItems extends Model
{

    use Translatable;

    public $translatedAttributes = ['label'];
    protected $table = 'menu_items';
    protected $fillable = ['slug', 'label'];

    public static function make($slug, $menu)
    {
        $data = compact('slug');

        foreach($menu as $locale => $label)
        {
            $data[$locale] = ['label' => $label];
        }
        
        $menu = new static($data);

        return $menu;
    }

     public static function edit($menu_id, $slug)
    {

        $menu = static::find($menu_id);

        $menu->slug = $slug;

        return $menu;
    }

}
