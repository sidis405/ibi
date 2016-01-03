<?php

namespace Ibi\Commands\Schede;

use Ibi\Commands\Command;

class UpdateSchedaCommand extends Command
{

    public $scheda_id;
    public $titolo;
    public $allegato;
    public $active;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($scheda_id, $titolo, $allegato, $active)
    {
        
        $this->scheda_id = $scheda_id;
        $this->titolo = $titolo;
        $this->allegato = $allegato;
        $this->active = $active;
    }

}
