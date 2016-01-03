<?php

namespace Ibi\Handlers\Commands\Contenuti;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Commands\Contenuti\UpdateContenutoCommand;
use Ibi\Events\Contenuti\ContenutoWasUpdated;
use Ibi\Models\Contenuti;
use Ibi\Repositories\ContenutiRepo;


class UpdateContenutoCommandHandler
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
     * @param  UpdateContenutoCommand  $command
     * @return void
     */
    public function handle(UpdateContenutoCommand $command)
    {

        $contenuto_object = Contenuti::edit($command->contenuto_id, $command->pagina_id, $command->slug, $command->descrizione, $command->testi);

        $contenuto = $this->repo->save($contenuto_object);

        $this->updateTranslations($contenuto, $command->testi);

        Event::fire(new ContenutoWasUpdated($contenuto));

        return $contenuto;
    }

    protected function updateTranslations($contenuto, $testi)
    {
        $data = [];
        
        foreach($testi as $locale => $testo)
        {
            $data[$locale] = ['testo' => $testo];
        }

        $contenuto->update($data);
    }
}
