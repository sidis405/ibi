<?php

namespace Ibi\Commands\Comunicati;

use Ibi\Commands\Command;

class UpdateComunicatoCommand extends Command
{

    public $comunicato_id;
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
    public function __construct($comunicato_id, $titolo, $allegato, $descrizione, $testo, $active)
    {
        
        $this->comunicato_id = $comunicato_id;
        $this->titolo = $titolo;
        $this->allegato = $allegato;
        $this->descrizione = $descrizione;
        $this->testo = $testo;
        $this->active = $active;
    }

}
