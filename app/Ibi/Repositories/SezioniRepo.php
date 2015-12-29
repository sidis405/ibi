<?php

namespace Ibi\Repositories;

use Ibi\Models\Sezioni;

/**
* Sezione Repo
*/
class SezioniRepo
{
    public function save(Sezioni $sezione)
    {
        $sezione->save();

        return $sezione;
    }

    public function remove($id)
    {
        $sezione = Sezioni::find($id);
        $sezione->delete();

        return true;
    }
}
