<?php

namespace Ibi\Commands\Contenuti;

use Ibi\Commands\Command;

class CreateContenutoCommand extends Command
{

    public $pagina_id;
    public $slug;
    public $descrizione;
    public $testi;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($pagina_id, $slug, $descrizione, $testi)
    {
        $this->pagina_id  = $pagina_id;
        $this->slug = $slug;
        $this->descrizione = $descrizione;
        $this->testi = $testi;
    }
}
