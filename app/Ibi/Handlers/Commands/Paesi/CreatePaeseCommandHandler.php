<?php

namespace Ibi\Handlers\Commands\Paesi;

use Ibi\Commands\Paesi\CreatePaeseCommand;
use Ibi\Models\Paesi;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Repositories\PaesiRepo;
use Ibi\Events\Paesi\PaeseWasCreated;
use Event;


class CreatePaeseCommandHandler
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
     * @param  CreatePaeseCommand  $command
     * @return void
     */
    public function handle(CreatePaeseCommand $command)
    {
        $paese_object = Paesi::make($command->nome);

        $paese = $this->repo->save($paese_object);

        Event::fire(new PaeseWasCreated($paese));

        return $paese;

    }
}
