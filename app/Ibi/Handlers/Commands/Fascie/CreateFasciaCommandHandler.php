<?php

namespace Ibi\Handlers\Commands\Fascie;

use Ibi\Commands\Fascie\CreateFasciaCommand;
use Ibi\Models\Fascie;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Repositories\FascieRepo;
use Ibi\Events\Fascie\FasciaWasCreated;
use Event;


class CreateFasciaCommandHandler
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
     * @param  CreateFasciaCommand  $command
     * @return void
     */
    public function handle(CreateFasciaCommand $command)
    {
        $fascia_object = Fascie::make($command->nome);

        $fascia = $this->repo->save($fascia_object);

        Event::fire(new FasciaWasCreated($fascia));

        return $fascia;

    }
}
