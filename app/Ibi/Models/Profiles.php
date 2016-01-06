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

    public function provincia_albo_rel()
    {
        return $this->belongsTo(Provincie::class, 'provincia_albo');
    }

    public function provincia_attivita_rel()
    {
        return $this->belongsTo(Provincie::class, 'provincia_attivita');
    }

    public function provincia_residenza_rel()
    {
        return $this->belongsTo(Provincie::class, 'provincia_residenza');
    }

    public function specializzazione_rel()
    {
        return $this->belongsTo(Specializzazioni::class, 'specializzazione');
    }
}
