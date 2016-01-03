<?php

namespace Ibi\Commands\Pagine;

use Ibi\Commands\Command;

class CreatePaginaCommand extends Command
{

    public $name;
    public $slug;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($name, $slug)
    {
        $this->name  = $name;
        $this->slug = $slug;
    }
}
