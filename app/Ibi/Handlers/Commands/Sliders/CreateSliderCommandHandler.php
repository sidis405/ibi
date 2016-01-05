<?php

namespace Ibi\Handlers\Commands\Sliders;

use Ibi\Commands\Sliders\CreateSliderCommand;
use Ibi\Models\Slider;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Repositories\SliderRepo;
use Ibi\Events\Sliders\SliderWasCreated;
use Event;
use Ibi\Utils\FileUtility;


class CreateSliderCommandHandler
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
     * @param  CreateSliderCommand  $command
     * @return void
     */
    public function handle(CreateSliderCommand $command)
    {
        $active = ($command->active === 'on') ? 1 : 0;

        $slider_object = Slider::make($command->titoli, $command->sottotitoli, $command->link, $active);

        // dd($slider_object);

        $slider = $this->repo->save($slider_object);

        $this->caricaImmagine($slider, $command->immagine);

        Event::fire(new SliderWasCreated($slider));

        return $slider;

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
