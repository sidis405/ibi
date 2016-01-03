<?php

namespace Ibi\Handlers\Commands\Pagine;

use Ibi\Commands\Pagine\CreatePaginaCommand;
use Ibi\Models\Pages;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Repositories\PagineRepo;
use Ibi\Events\Pagine\PaginaWasCreated;
use Event;


class CreatePaginaCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(PagineRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  CreatePaginaCommand  $command
     * @return void
     */
    public function handle(CreatePaginaCommand $command)
    {
        $pagina_object = Pages::make($command->name, $command->slug);

        $pagina = $this->repo->save($pagina_object);

        Event::fire(new PaginaWasCreated($pagina));

        return $pagina;

    }
}
