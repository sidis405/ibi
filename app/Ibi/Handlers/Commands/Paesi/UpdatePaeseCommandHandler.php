<?php

namespace Ibi\Handlers\Commands\Paesi;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Commands\Paesi\UpdatePaeseCommand;
use Ibi\Events\Paesi\PaeseWasUpdated;
use Ibi\Models\Paesi;
use Ibi\Repositories\PaesiRepo;


class UpdatePaeseCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(PaesiRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  UpdatePaeseCommand  $command
     * @return void
     */
    public function handle(UpdatePaeseCommand $command)
    {

        $paese_object = Paesi::edit(
            $command->paese_id,
            $command->nome
            );

        $paese = $this->repo->save($paese_object);

        Event::fire(new PaeseWasUpdated($paese));

        return $paese;
    }
}
