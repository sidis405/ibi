<?php

namespace Ibi\Commands\News;

use Ibi\Commands\Command;

class UpdateNewsCommand extends Command
{

    public $news_id;
    public $titolo;
    public $immagine_path;
    public $descrizione;
    public $testo;
    public $active;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($news_id, $titolo, $immagine_path, $descrizione, $testo, $active)
    {
        
        $this->news_id = $news_id;
        $this->titolo = $titolo;
        $this->immagine_path = $immagine_path;
        $this->descrizione = $descrizione;
        $this->testo = $testo;
        $this->active = $active;
    }

}
