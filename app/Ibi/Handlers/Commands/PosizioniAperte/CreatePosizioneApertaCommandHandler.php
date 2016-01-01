<?php

namespace Ibi\Handlers\Commands\PosizioniAperte;

use Event;
use Ibi\Commands\PosizioniAperte\CreatePosizioneApertaCommand;
use Ibi\Events\PosizioniAperte\PosizioneApertaWasCreated;
use Ibi\Models\PosizioniAperte;
use Ibi\Repositories\PosizioniAperteRepo;
use Illuminate\Queue\InteractsWithQueue;

class CreatePosizioneApertaCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(PosizioniAperteRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  CreatePosizioneApertaCommand  $command
     * @return void
     */
    public function handle(CreatePosizioneApertaCommand $command)
    {
        $active = ($command->active === 'on') ? 1 : 0;


        $posizione_object = PosizioniAperte::make($command->titolo, $command->sede, $command->descrizione, $active);

        $posizione = $this->repo->save($posizione_object);

        Event::fire(new PosizioneApertaWasCreated($posizione));

        return $posizione;

    }
}
