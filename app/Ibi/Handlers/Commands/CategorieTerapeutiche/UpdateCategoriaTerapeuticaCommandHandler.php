<?php

namespace Ibi\Handlers\Commands\CategorieTerapeutiche;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Commands\CategorieTerapeutiche\UpdateCategoriaTerapeuticaCommand;
use Ibi\Events\CategorieTerapeutiche\CategoriaTerapeuticaWasUpdated;
use Ibi\Models\CategorieTerapeutiche;
use Ibi\Repositories\CategorieTerapeuticheRepo;


class UpdateCategoriaTerapeuticaCommandHandler
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
     * @param  UpdateCategoriaTerapeuticaCommand  $command
     * @return void
     */
    public function handle(UpdateCategoriaTerapeuticaCommand $command)
    {

        $categoria_terapeutica_object = CategorieTerapeutiche::edit(
            $command->categoria_terapeutica_id,
            $command->nome
            );

        $categoria_terapeutica = $this->repo->save($categoria_terapeutica_object);

        $categoria_terapeutica->principi_attivi()->sync($command->principi_attivi);

        Event::fire(new CategoriaTerapeuticaWasUpdated($categoria_terapeutica));

        return $categoria_terapeutica;
    }
}
