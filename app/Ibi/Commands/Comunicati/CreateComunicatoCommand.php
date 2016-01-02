<?php

namespace Ibi\Commands\Comunicati;

use Ibi\Commands\Command;

class CreateComunicatoCommand extends Command
{
    public $titolo;
    public $allegato;
    public $descrizione;
    public $testo;
    public $active;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($titolo, $allegato, $descrizione, $testo, $active)
    {
        
        $this->titolo = $titolo;
        $this->allegato = $allegato;
        $this->descrizione = $descrizione;
        $this->testo = $testo;
        $this->active = $active;
    }
}
