<?php

namespace Ibi\Handlers\Commands\CategorieTerapeutiche;

use Ibi\Commands\CategorieTerapeutiche\CreateCategoriaTerapeuticaCommand;
use Ibi\Models\Ct;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Repositories\CategorieTerapeuticheRepo;
use Ibi\Events\CategorieTerapeutiche\CategoriaTerapeuticaWasCreated;
use Event;


class CreateCategoriaTerapeuticaCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(CategorieTerapeuticheRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  CreateaCategoriaTerapeuticaCommand  $command
     * @return void
     */
    public function handle(CreateCategoriaTerapeuticaCommand $command)
    {
        $categoria_terapeutica_object = Ct::make($command->nomi);
        // dd($categoria_terapeutica_object);

        $categoria_terapeutica = $this->repo->save($categoria_terapeutica_object);

        $categoria_terapeutica->principi_attivi()->sync($command->principi_attivi);

        Event::fire(new CategoriaTerapeuticaWasCreated($categoria_terapeutica));

        return $categoria_terapeutica;

    }
}
