<?php

namespace Ibi\Handlers\Commands\CategorieTerapeutiche;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Commands\CategorieTerapeutiche\UpdateCategoriaTerapeuticaCommand;
use Ibi\Events\CategorieTerapeutiche\CategoriaTerapeuticaWasUpdated;
use Ibi\Models\Ct;
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

        $categoria_terapeutica_object = Ct::edit(
            $command->categoria_terapeutica_id,
            $command->nomi
            );

        $categoria_terapeutica = $this->repo->save($categoria_terapeutica_object);

        $categoria_terapeutica->principi_attivi()->sync($command->principi_attivi);

        $this->updateTranslations($categoria_terapeutica, $command->nomi);

        Event::fire(new CategoriaTerapeuticaWasUpdated($categoria_terapeutica));

        return $categoria_terapeutica;
    }


    protected function updateTranslations($categoria, $nomi)
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

        $categoria->update($data);
    }
}
