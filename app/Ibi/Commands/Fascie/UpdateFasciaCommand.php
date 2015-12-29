<?php

namespace Ibi\Commands\Fascie;

use Ibi\Commands\Command;

class UpdateFasciaCommand extends Command
{

      public $fascia_id;
      public $nome;

    /**
     * Update a command instance.
     *
     * @return void
     */
    public function __construct($fascia_id, $nome)
    {
        $this->fascia_id = $fascia_id;
        $this->nome = $nome;
    }
}
