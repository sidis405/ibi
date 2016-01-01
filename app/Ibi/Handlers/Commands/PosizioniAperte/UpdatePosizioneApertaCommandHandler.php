<?php

namespace Ibi\Handlers\Commands\PosizioniAperte;

use Event;
use Ibi\Commands\PosizioniAperte\UpdatePosizioneApertaCommand;
use Ibi\Events\PosizioniAperte\PosizioneApertaWasUpdated;
use Ibi\Models\PosizioniAperte;
use Ibi\Repositories\PosizioniAperteRepo;
use Illuminate\Queue\InteractsWithQueue;

class UpdatePosizioneApertaCommandHandler
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
     * @param  UpdatePosizioneApertaCommand  $command
     * @return void
     */
    public function handle(UpdatePosizioneApertaCommand $command)
    {
        $active = ($command->active === 'on') ? 1 : 0;

        $posizione_object = PosizioniAperte::edit($command->posizione_id, $command->titolo, $command->sede, $command->descrizione, $active);

        $posizione = $this->repo->save($posizione_object);

        Event::fire(new PosizioneApertaWasUpdated($posizione));

        return $posizione;
    }

}
