<?php

namespace Ibi\Handlers\Commands\Listini;

use Event;
use Ibi\Commands\Listini\UpdateListinoCommand;
use Ibi\Events\Listini\ListinoWasUpdated;
use Ibi\Models\Listini;
use Ibi\Repositories\ListiniRepo;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Utils\FileUtility;

class UpdateListinoCommandHandler
{
    public $repo;
    public $file_utility;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(ListiniRepo $repo, FileUtility $file_utility)
    {
        $this->repo = $repo;
        $this->file_utility = $file_utility;
    }

    /**
     * Handle the command.
     *
     * @param  UpdateListinoCommand  $command
     * @return void
     */
    public function handle(UpdateListinoCommand $command)
    {
        $listino_object = Listini::edit($command->listino_id, $command->titolo);

        $listino = $this->repo->save($listino_object);

        $this->caricaAllegato($listino, $command->allegato);

        Event::fire(new ListinoWasUpdated($listino));

        return $listino;
    }

    protected function caricaAllegato($listino, $allegato)
    {

        if($allegato)
        {
            $alleagato_path = $this->file_utility->putFile($listino->id, 'listini_allegati', $allegato);

            $listino->update(['allegato' => $alleagato_path]);
            
        }

    }
}
