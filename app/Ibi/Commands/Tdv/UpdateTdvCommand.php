<?php

namespace Ibi\Commands\Tdv;

use Ibi\Commands\Command;

class UpdateTdvCommand extends Command
{

    public $tdv_id;
    public $titolo;
    public $allegato;
    public $active;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($tdv_id, $titolo, $allegato, $active)
    {
        
        $this->tdv_id = $tdv_id;
        $this->titolo = $titolo;
        $this->allegato = $allegato;
        $this->active = $active;
    }

}
