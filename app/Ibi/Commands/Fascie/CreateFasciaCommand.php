<?php

namespace Ibi\Commands\Fascie;

use Ibi\Commands\Command;

class CreateFasciaCommand extends Command
{

    public $nome;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($nome)
    {
        $this->nome  = $nome;
    }
}
