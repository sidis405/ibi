<?php

namespace Ibi\Commands\PrincipiAttivi;

use Ibi\Commands\Command;

class CreatePrincipioAttivoCommand extends Command
{

    public $nome;
    public $categorie_terapeutiche;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($nome, $categorie_terapeutiche = [])
    {
        $this->nome  = $nome;
        $this->categorie_terapeutiche  = $categorie_terapeutiche;
    }
}
