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

    public function getAll()
    {
        return Sezioni::with('prodotti')->orderBy('nome')->get();
    } 

    public function getById($id)
    {
        return Sezioni::where('id', $id)->with('prodotti')->first();
    } 

    public function getBySlug($slug)
    {
        return Sezioni::where('slug', $slug)->with('prodotti.categoria_terapeutica', 'prodotti.principio_attivo', 'prodotti.fascia')->first();
    } 
}
