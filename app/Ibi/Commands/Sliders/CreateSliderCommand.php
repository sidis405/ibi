<?php

namespace Ibi\Commands\Sliders;

use Ibi\Commands\Command;

class CreateSliderCommand extends Command
{
    public $titoli;
    public $sottotitoli;
    public $link;
    public $immagine;
    public $active;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($titoli, $sottotitoli, $link, $immagine, $active)
    {
        $this->titoli = $titoli;
        $this->sottotitoli = $sottotitoli;
        $this->link = $link;
        $this->immagine = $immagine;
        $this->active = $active;
    }
}
