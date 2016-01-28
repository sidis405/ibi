<?php

namespace Ibi\Commands\PrincipiAttivi;

use Ibi\Commands\Command;

class UpdatePrincipioAttivoCommand extends Command
{

    public $principio_attivo_id;
    public $nomi;
    public $categorie_terapeutiche;

    /**
     * Update a command instance.
     *
     * @return void
     */
    public function __construct($principio_attivo_id, $nomi, $categorie_terapeutiche)
    {
        $this->principio_attivo_id = $principio_attivo_id;
        $this->nomi = $nomi;
        $this->categorie_terapeutiche = $categorie_terapeutiche;
    }
}
