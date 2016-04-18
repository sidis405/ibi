<?php

namespace Ibi\Repositories;

use Ibi\Models\Options;

/**
* News Repo
*/
class ImpostazioniRepo 
{
    public function save(Options $staff_info)
    {
        $staff_info->save();

        return $staff_info;
    }

    public function getById($id)
    {
        return Options::where('id', $id)->first();
    } 
}
