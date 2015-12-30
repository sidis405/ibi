<?php

namespace Ibi\Commands\Paesi;

use Ibi\Commands\Command;

class UpdatePaeseCommand extends Command
{

      public $paese_id;
      public $nome;

    /**
     * Update a command instance.
     *
     * @return void
     */
    public function __construct($paese_id, $nome)
    {
        $this->paese_id = $paese_id;
        $this->nome = $nome;
    }
}
