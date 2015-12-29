<?php

namespace Ibi\Handlers\Commands\Fascie;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Commands\Fascie\UpdateFasciaCommand;
use Ibi\Events\Fascie\FasciaWasUpdated;
use Ibi\Models\Fascie;
use Ibi\Repositories\FascieRepo;


class UpdateFasciaCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(FascieRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  UpdateFasciaCommand  $command
     * @return void
     */
    public function handle(UpdateFasciaCommand $command)
    {

        $fascia_object = Fascie::edit(
            $command->fascia_id,
            $command->nome
            );

        $fascia = $this->repo->save($fascia_object);

        Event::fire(new FasciaWasUpdated($fascia));

        return $fascia;
    }
}
