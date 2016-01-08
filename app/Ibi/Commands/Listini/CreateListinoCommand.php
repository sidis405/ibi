<?php

namespace Ibi\Commands\Listini;

use Ibi\Commands\Command;

class CreateListinoCommand extends Command
{
    public $titolo;
    public $allegato;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($titolo, $allegato)
    {
        $this->titolo = $titolo;
        $this->allegato = $allegato;
    }
}
