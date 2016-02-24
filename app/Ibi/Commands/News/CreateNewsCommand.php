<?php

namespace Ibi\Commands\News;

use Ibi\Commands\Command;

class CreateNewsCommand extends Command
{
    public $titolo;
    public $immagine_path;
    public $descrizione;
    public $testo;
    public $active;
    public $created_at;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($titolo, $immagine_path, $descrizione, $testo, $active, $created_at)
    {
        
        $this->titolo = $titolo;
        $this->immagine_path = $immagine_path;
        $this->descrizione = $descrizione;
        $this->testo = $testo;
        $this->active = $active;
        $this->created_at = $created_at;
    }
}
