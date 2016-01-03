<?php

namespace Ibi\Commands\Pagine;

use Ibi\Commands\Command;

class UpdatePaginaCommand extends Command
{

    public $pagina_id;
    public $name;
    public $slug;

    /**
     * Update a command instance.
     *
     * @return void
     */
    public function __construct($pagina_id, $name, $slug)
    {
        $this->pagina_id = $pagina_id;
        $this->name = $name;
        $this->slug = $slug;
    }
}
