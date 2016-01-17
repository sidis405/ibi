<?php

namespace Ibi\Commands\Prodotti;

use Ibi\Commands\Command;

class CreateProdottoCommand extends Command
{

    public $nome;
    public $formulazione;
    public $principio_attivo_id;
    public $fascia_id;
    public $foglietto_illustrativo;
    public $scheda_tecnica;
    // public $aic;
    // public $atc;
    public $regime_dispensazione;
    public $unita;
    public $validita_mesi;
    public $categoria_terapeutica_id;
    public $active;
    public $sezioni;
    public $paesi;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($nome, 
                                $formulazione, 
                                $principio_attivo_id, 
                                $fascia_id, 
                                $foglietto_illustrativo, 
                                $scheda_tecnica, 
                                // $aic, 
                                // $atc, 
                                $regime_dispensazione, 
                                $unita, 
                                $validita_mesi, 
                                $categoria_terapeutica_id,
                                $sezioni,
                                $active = 0,
                                $paesi = []
                                )
    {
        $this->nome = $nome;
        $this->formulazione = $formulazione; 
        $this->principio_attivo_id = $principio_attivo_id; 
        $this->fascia_id = $fascia_id; 
        $this->foglietto_illustrativo = $foglietto_illustrativo; 
        $this->scheda_tecnica = $scheda_tecnica; 
        // $this->aic = $aic; 
        // $this->atc = $atc; 
        $this->regime_dispensazione = $regime_dispensazione; 
        $this->unita = $unita; 
        $this->validita_mesi = $validita_mesi; 
        $this->categoria_terapeutica_id = $categoria_terapeutica_id; 
        $this->active = $active;
        $this->sezioni = $sezioni;
        $this->paesi = $paesi;
    }
}
