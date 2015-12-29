<?php

namespace Ibi\Repositories;

use Ibi\Models\Paesi;

/**
* Paesi Repo
*/
class PaesiRepo
{
    public function save(Paesi $paese)
    {
        $paese->save();

        return $paese;
    }

    public function remove($id)
    {
        $paese = Paesi::find($id);
        $paese->delete();

        return true;
    }
}
