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

        if( ! $prodotto ) return false;

        $prodotto->sezioni()->sync([]);
        $prodotto->paesi()->sync([]);

        $prodotto->delete();

        return true;
    }

    public function getAll()
    {
        return Prodotti::with('sezioni', 'paesi', 'categoria_terapeutica', 'principio_attivo', 'fascia')->orderBy('nome')->get();
    } 

    public function getById($id)
    {
        return Prodotti::where('id', $id)->with('sezioni', 'paesi', 'categoria_terapeutica', 'principio_attivo', 'fascia')->first();
    }
}
