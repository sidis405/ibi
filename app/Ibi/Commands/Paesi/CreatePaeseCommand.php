<?php

namespace Ibi\Commands\Paesi;

use Ibi\Commands\Command;

class CreatePaeseCommand extends Command
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
