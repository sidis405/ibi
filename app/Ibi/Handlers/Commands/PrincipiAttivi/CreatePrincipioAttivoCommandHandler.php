<?php

namespace Ibi\Handlers\Commands\PrincipiAttivi;

use Ibi\Commands\PrincipiAttivi\CreatePrincipioAttivoCommand;
use Ibi\Models\Pa;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Repositories\PrincipiAttiviRepo;
use Ibi\Events\PrincipiAttivi\PrincipioAttivoWasCreated;
use Event;


class CreatePrincipioAttivoCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(PrincipiAttiviRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  CreateaCategoriaTerapeuticaCommand  $command
     * @return void
     */
    public function handle(CreatePrincipioAttivoCommand $command)
    {
        $principio_attivo_object = Pa::make($command->nomi);

        $principio_attivo = $this->repo->save($principio_attivo_object);

        $principio_attivo->categorie_terapeutiche()->sync($command->categorie_terapeutiche);

        Event::fire(new PrincipioAttivoWasCreated($principio_attivo));

        return $principio_attivo;

    }
}
