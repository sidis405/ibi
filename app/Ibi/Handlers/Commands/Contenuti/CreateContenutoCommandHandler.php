<?php

namespace Ibi\Handlers\Commands\Contenuti;

use Ibi\Commands\Contenuti\CreateContenutoCommand;
use Ibi\Models\Contenuti;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Repositories\ContenutiRepo;
use Ibi\Events\Contenuti\ContenutoWasCreated;
use Event;


class CreateContenutoCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(ContenutiRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  CreateContenutoCommand  $command
     * @return void
     */
    public function handle(CreateContenutoCommand $command)
    {

        $contenuto_object = Contenuti::make($command->pagina_id, $command->slug, $command->descrizione, $command->testi);
        // dd($contenuto_object);

        $contenuto = $this->repo->save($contenuto_object);

        Event::fire(new ContenutoWasCreated($contenuto));

        return $contenuto;

    }
}
