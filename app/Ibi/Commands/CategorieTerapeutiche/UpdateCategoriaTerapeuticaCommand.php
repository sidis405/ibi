<?php

namespace Ibi\Commands\CategorieTerapeutiche;

use Ibi\Commands\Command;

class UpdateCategoriaTerapeuticaCommand extends Command
{

    public $categoria_terapeutica_id;
    public $nomi;
    public $principi_attivi;

    /**
     * Update a command instance.
     *
     * @return void
     */
    public function __construct($categoria_terapeutica_id, $nomi, $principi_attivi = [])
    {
        $this->categoria_terapeutica_id = $categoria_terapeutica_id;
        $this->nomi = $nomi;
        $this->principi_attivi = $principi_attivi;
    }
}
