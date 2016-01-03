<?php

namespace Ibi\Commands\Schede;

use Ibi\Commands\Command;

class CreateSchedaCommand extends Command
{
    public $titolo;
    public $allegato;
    public $active;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($titolo, $allegato, $active)
    {
        $this->titolo = $titolo;
        $this->allegato = $allegato;
        $this->active = $active;
    }
}
