<?php

namespace Ibi\Handlers\Commands\PrincipiAttivi;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Commands\PrincipiAttivi\UpdatePrincipioAttivoCommand;
use Ibi\Events\PrincipiAttivi\PrincipioAttivoWasUpdated;
use Ibi\Models\Pa;
use Ibi\Repositories\PrincipiAttiviRepo;


class UpdatePrincipioAttivoCommandHandler
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
     * @param  UpdatePrincipioAttivoCommand  $command
     * @return void
     */
    public function handle(UpdatePrincipioAttivoCommand $command)
    {

        $principio_attivo_object = Pa::edit(
            $command->principio_attivo_id,
            $command->nomi
            );

        $principio_attivo = $this->repo->save($principio_attivo_object);

        $principio_attivo->categorie_terapeutiche()->sync($command->categorie_terapeutiche);

        $this->updateTranslations($principio_attivo, $command->nomi);

        Event::fire(new PrincipioAttivoWasUpdated($principio_attivo));

        return $principio_attivo;
    }

     protected function updateTranslations($principi, $nomi)
    {
        $data = [];
        
        foreach($nomi as $locale => $nome)
        {
            $data[$locale]['nome'] = $nome;
        }

        foreach($nomi as $locale => $nome)
        {
            $data[$locale]['slug'] = str_slug($nome);
        }

        $principi->update($data);
    }
}
