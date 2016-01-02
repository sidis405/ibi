<?php

namespace Ibi\Handlers\Commands\Comunicati;

use Event;
use Ibi\Commands\Comunicati\CreateComunicatoCommand;
use Ibi\Events\Comunicati\ComunicatoWasCreated;
use Ibi\Models\Comunicati;
use Ibi\Repositories\ComunicatiRepo;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Utils\FileUtility;

class CreateComunicatoCommandHandler
{
    public $repo;
    public $file_utility;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(ComunicatiRepo $repo, FileUtility $file_utility)
    {
        $this->repo = $repo;
        $this->file_utility = $file_utility;
    }

    /**
     * Handle the command.
     *
     * @param  CreateComunicatoCommand  $command
     * @return void
     */
    public function handle(CreateComunicatoCommand $command)
    {
        $active = ($command->active === 'on') ? 1 : 0;


        $comunicato_object = Comunicati::make($command->titolo , $command->descrizione, $command->testo, $active);

        $comunicato = $this->repo->save($comunicato_object);

        $this->caricaAllegato($comunicato, $command->alegato);

        Event::fire(new ComunicatoWasCreated($comunicato));

        return $comunicato;

    }

    protected function caricaAllegato($comunicato, $allegato)
    {

        if($allegato)
        {
            $alleagato_path = $this->file_utility->putFile($comunicato->id, 'comunicati_allegati', $allegato);

            $comunicato->update(['alleagto' => $alleagato_path]);
            
        }

    }
}
