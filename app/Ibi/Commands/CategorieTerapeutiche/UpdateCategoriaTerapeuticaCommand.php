<?php

namespace Ibi\Commands\CategorieTerapeutiche;

use Ibi\Commands\Command;

class UpdateCategoriaTerapeuticaCommand extends Command
{

    public $categoria_terapeutica_id;
    public $nome;
    public $principi_attivi;

    /**
     * Update a command instance.
     *
     * @return void
     */
    public function __construct($categoria_terapeutica_id, $nome, $principi_attivi = [])
    {
        $this->categoria_terapeutica_id = $categoria_terapeutica_id;
        $this->nome = $nome;
        $this->principi_attivi = $principi_attivi;
    }
}
