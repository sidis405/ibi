<?php

namespace Ibi\Commands\Contenuti;

use Ibi\Commands\Command;

class UpdateContenutoCommand extends Command
{

    public $pagina_id;
    public $descrizione;
    public $slug;
    public $testi;
    public $contenuto_id;

    /**
     * Update a command instance.
     *
     * @return void
     */
    public function __construct($pagina_id, $descrizione, $slug, $testi, $contenuto_id)
    {
        $this->pagina_id = $pagina_id;
        $this->descrizione = $descrizione;
        $this->slug = $slug;
        $this->testi = $testi;
        $this->contenuto_id = $contenuto_id;
    }
}
