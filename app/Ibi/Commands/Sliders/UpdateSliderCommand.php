<?php

namespace Ibi\Commands\Sliders;

use Ibi\Commands\Command;

class UpdateSliderCommand extends Command
{

    public $slider_id;
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
    public function __construct($slider_id, $titoli, $sottotitoli, $link, $immagine, $active)
    {
        
        $this->slider_id = $slider_id;
        $this->titoli = $titoli;
        $this->sottotitoli = $sottotitoli;
        $this->link = $link;
        $this->immagine = $immagine;
        $this->active = $active;
    }

}
