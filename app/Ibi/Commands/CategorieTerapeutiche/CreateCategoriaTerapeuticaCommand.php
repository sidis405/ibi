<?php

namespace Ibi\Commands\CategorieTerapeutiche;

use Ibi\Commands\Command;

class CreateCategoriaTerapeuticaCommand extends Command
{

    public $nome;
    public $principi_attivi;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($nome, $principi_attivi = [])
    {
        $this->nome  = $nome;
        $this->principi_attivi  = $principi_attivi;
    }
}
