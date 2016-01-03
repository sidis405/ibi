<?php

namespace Ibi\Handlers\Commands\Pagine;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Commands\Pagine\UpdatePaginaCommand;
use Ibi\Events\Pagine\PaginaWasUpdated;
use Ibi\Models\Pages;
use Ibi\Repositories\PagineRepo;


class UpdatePaginaCommandHandler
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
     * @param  UpdatePaginaCommand  $command
     * @return void
     */
    public function handle(UpdatePaginaCommand $command)
    {

        $pagina_object = Pages::edit(
            $command->pagina_id,
            $command->name,
            $command->slug
            );

        $pagina = $this->repo->save($pagina_object);

        Event::fire(new PaginaWasUpdated($pagina));

        return $pagina;
    }
}
