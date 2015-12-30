<?php

namespace Ibi\Commands\PrincipiAttivi;

use Ibi\Commands\Command;

class UpdatePrincipioAttivoCommand extends Command
{

    public $principio_attivo_id;
    public $nome;
    public $categorie_terapeutiche;

    /**
     * Update a command instance.
     *
     * @return void
     */
    public function __construct($principio_attivo_id, $nome, $categorie_terapeutiche)
    {
        $this->principio_attivo_id = $principio_attivo_id;
        $this->nome = $nome;
        $this->categorie_terapeutiche = $categorie_terapeutiche;
    }
}
