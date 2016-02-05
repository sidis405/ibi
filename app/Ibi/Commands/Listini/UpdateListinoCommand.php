<?php

namespace Ibi\Commands\Listini;

use Ibi\Commands\Command;

class UpdateListinoCommand extends Command
{

    public $listino_id;
    public $titolo;
    public $allegato;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($listino_id, $titolo, $allegato)
    {
        
        $this->listino_id = $listino_id;
        $this->titolo = $titolo;
        $this->allegato = $allegato;
    }

}
