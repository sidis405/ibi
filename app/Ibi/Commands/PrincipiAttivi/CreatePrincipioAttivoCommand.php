<?php

namespace Ibi\Commands\PrincipiAttivi;

use Ibi\Commands\Command;

class CreatePrincipioAttivoCommand extends Command
{

    public $nomi;
    public $categorie_terapeutiche;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($nomi, $categorie_terapeutiche = [])
    {
        $this->nomi  = $nomi;
        $this->categorie_terapeutiche  = $categorie_terapeutiche;
    }
}
