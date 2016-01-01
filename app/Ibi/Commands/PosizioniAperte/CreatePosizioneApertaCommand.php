<?php

namespace Ibi\Commands\PosizioniAperte;

use Ibi\Commands\Command;

class CreatePosizioneApertaCommand extends Command
{
    public $titolo;
    public $sede;
    public $descrizione;
    public $active;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($titolo, $sede, $descrizione, $active)
    {
        
        $this->titolo = $titolo;
        $this->sede = $sede;
        $this->descrizione = $descrizione;
        $this->active = $active;
    }
}
