<?php

namespace Ibi\Commands\PosizioniAperte;

use Ibi\Commands\Command;

class UpdatePosizioneApertaCommand extends Command
{

    public $posizione_id;
    public $titolo;
    public $sede;
    public $descrizione;
    public $active;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($posizione_id, $titolo, $sede, $descrizione, $active)
    {
        
        $this->posizione_id = $posizione_id;
        $this->titolo = $titolo;
        $this->sede = $sede;
        $this->descrizione = $descrizione;
        $this->active = $active;
    }

}
