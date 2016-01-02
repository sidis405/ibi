<?php

namespace Ibi\Commands\Comunicati;

use Ibi\Commands\Command;

class UpdateComunicatoCommand extends Command
{

    public $comunicato_id;
    public $titolo;
    public $alegato;
    public $descrizione;
    public $testo;
    public $active;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($comunicato_id, $titolo, $alegato, $descrizione, $testo, $active)
    {
        
        $this->comunicato_id = $comunicato_id;
        $this->titolo = $titolo;
        $this->alegato = $alegato;
        $this->descrizione = $descrizione;
        $this->testo = $testo;
        $this->active = $active;
    }

}
