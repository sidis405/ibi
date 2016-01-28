<?php

namespace Ibi\Commands\CategorieTerapeutiche;

use Ibi\Commands\Command;

class CreateCategoriaTerapeuticaCommand extends Command
{

    public $nomi;
    public $principi_attivi;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($nomi, $principi_attivi = [])
    {
        $this->nomi  = $nomi;
        $this->principi_attivi  = $principi_attivi;
    }
}
