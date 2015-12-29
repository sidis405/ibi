<?php

namespace Ibi\Repositories;

use Ibi\Models\Prodotti;

/**
* Prodotti Repo
*/
class ProdottiRepo
{
    public function save(Prodotti $prodotto)
    {
        $prodotto->save();

        return $prodotto;
    }

    public function remove($id)
    {
        $prodotto = Prodotti::find($id);
        $prodotto->delete();

        return true;
    }
}
