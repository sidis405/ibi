<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Profiles extends Model
{
    protected $guarded = ['id'];

    protected $table = 'profiles';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function provincia_albo()
    {
        return $this->belongsTo(Provincie::class, 'provincia_albo');
    }

    public function provincia_attivita()
    {
        return $this->belongsTo(Provincie::class, 'provincia_attivita');
    }

    public function provincia_residenza()
    {
        return $this->belongsTo(Provincie::class, 'provincia_residenza');
    }

    public function specializzazione()
    {
        return $this->belongsTo(Specializzazioni::class, 'specializzazione');
    }
}
