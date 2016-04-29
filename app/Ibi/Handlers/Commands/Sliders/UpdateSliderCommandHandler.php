<?php

namespace Ibi\Handlers\Commands\Sliders;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Commands\Sliders\UpdateSliderCommand;
use Ibi\Events\Sliders\SliderWasUpdated;
use Ibi\Models\Slider;
use Ibi\Repositories\SliderRepo;
use Ibi\Utils\FileUtility;

class UpdateSliderCommandHandler
{
    public $repo;
    public $file_utility;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(SliderRepo $repo, FileUtility $file_utility)
    {
        $this->repo = $repo;
        $this->file_utility = $file_utility;
    }

    /**
     * Handle the command.
     *
     * @param  UpdateSliderCommand  $command
     * @return void
     */
    public function handle(UpdateSliderCommand $command)
    {

        $active = ($command->active === 'on') ? 1 : 0;

        $slider_object = Slider::edit($command->slider_id, $command->titoli, $command->sottotitoli, $command->link, $active);

        $slider = $this->repo->save($slider_object);

        $this->updateTranslations($slider, $command->titoli, $command->sottotitoli);

        // dd($command->immagine);
        $this->caricaImmagine($slider, $command->immagine);

        Event::fire(new SliderWasUpdated($slider));

        return $slider;
    }

    protected function updateTranslations($slider, $titoli, $sottotitoli)
    {
        $data = [];
        
        foreach($titoli as $locale => $titolo)
        {
            $data[$locale]['titolo'] = $titolo;
        }

        foreach($sottotitoli as $locale => $sottotitolo)
        {
            $data[$locale]['sottotitolo'] = $sottotitolo;
        }

        // dd($data);

        $slider->update($data);
    }

    protected function caricaImmagine($slider, $immagine)
    {

        if($immagine)
        {
            $immagine_path = $this->file_utility->putFile($slider->id, 'slider_immagine', $immagine);

            $slider->update(['immagine' => $immagine_path]);
            
        }

    }
}
