<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class Allegati extends Model
{

		protected $table = 'allegati';

		protected $fillable = ['name', 'path', 'news_id'];

}
