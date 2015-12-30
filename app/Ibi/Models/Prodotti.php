<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class Prodotti extends Model
{
    protected $table = 'prodotti';

    protected $protected = ['id', 'created_at', 'updated_at'];


    public function categoria_terapeutica()
    {
        return $this->belongsTo(CategorieTerapeutiche::class, 'categoria_terapeutica_id');
    }

    public function fascia()
    {
        return $this->belongsTo(Fascie::class, 'fascia_id');
    }

    public function sezioni()
    {
        return $this->belongsToMany(Sezioni::class, 'prodotti_sezioni', 'prodotto_id', 'sezione_id');
    }

    public function paesi()
    {
        return $this->belongsToMany(Paesi::class, 'prodotti_paesi', 'prodotto_id', 'paese_id');
    }

    public static function make($nome, 
                                $formulazione, 
                                $principio_attivo_id, 
                                $fascia_id, 
                                $aic, 
                                $atc, 
                                $regime_dispensazione, 
                                $unita, 
                                $validita_mesi, 
                                $categoria_terapeutica_id, 
                                $active){

        $nome = rtrim($nome);
        $slug = str_slug($nome);
        
        $prodotto = new static(compact('nome', 'slug', 'formulazione', 'principio_attivo_id', 'fascia_id', 'foglietto_illustrativo', 'scheda_tecnica', 'aic', 'atc', 'regime_dispensazione', 'unita', 'validita_mesi', 'categoria_terapeutica_id', 'active'));

        return $prodotto;
    }

    public static function edit($prodotto_id, 
                                $nome, 
                                $formulazione, 
                                $principio_attivo_id, 
                                $fascia_id, 
                                $aic, 
                                $atc, 
                                $regime_dispensazione, 
                                $unita, 
                                $validita_mesi, 
                                $categoria_terapeutica_id, 
                                $active)
    {
        $nome = rtrim($nome);

        $prodotto = static::find($prodotto_id);

        $prodotto->nome = $nome;
        $prodotto->slug = str_slug($nome);
        $prodotto->formulazione = $formulazione; 
        $prodotto->principio_attivo_id = $principio_attivo_id; 
        $prodotto->fascia_id = $fascia_id; 
        $prodotto->aic = $aic; 
        $prodotto->atc = $atc; 
        $prodotto->regime_dispensazione = $regime_dispensazione; 
        $prodotto->unita = $unita; 
        $prodotto->validita_mesi = $validita_mesi; 
        $prodotto->categoria_terapeutica_id = $categoria_terapeutica_id; 
        $prodotto->active = $active;

        return $prodotto;
    }
}
