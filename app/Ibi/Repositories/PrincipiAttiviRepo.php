<?php

namespace Ibi\Repositories;

use Ibi\Models\PrincipiAttivi;

/**
* Principi Attivi Repo
*/
class PrincipiAttiviRepo
{
    public function save(PrincipiAttivi $principioAttivo)
    {
        $principioAttivo->save();

        return $principioAttivo;
    }

    public function remove($id)
    {
        $principioAttivo = PrincipiAttivi::find($id);
        $principioAttivo->delete();

        return true;
    }
}
