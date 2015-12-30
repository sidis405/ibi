<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class Paesi extends Model
{
        protected $fillable = ['nome', 'slug'];
        protected $table = 'paesi';

        public function prodotti()
        {
            return $this->hasMany(Prodotti::class, 'paese_id');
        }

        public static function make($nome)
        {
            $nome = rtrim($nome);
            $slug = str_slug($nome);
            
            $paese = new static(compact('nome', 'slug'));

            return $paese;
        }

        public static function edit($paese_id, $nome)
        {
            $nome = rtrim($nome);

            $paese = static::find($paese_id);

            $paese->nome = $nome;
            $paese->slug = str_slug($nome);

            return $paese;
        }
}
