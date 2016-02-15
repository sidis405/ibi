<?php

namespace Ibi\Handlers\Commands\Tdv;

use Event;
use Ibi\Commands\Tdv\UpdateTdvCommand;
use Ibi\Events\Tdv\TdvWasUpdated;
use Ibi\Models\Tdv;
use Ibi\Repositories\TdvRepo;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Utils\FileUtility;

class UpdateTdvCommandHandler
{
    public $repo;
    public $file_utility;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(TdvRepo $repo, FileUtility $file_utility)
    {
        $this->repo = $repo;
        $this->file_utility = $file_utility;
    }

    /**
     * Handle the command.
     *
     * @param  UpdateTdvCommand  $command
     * @return void
     */
    public function handle(UpdateTdvCommand $command)
    {
        $active = ($command->active === 'on') ? 1 : 0;

        $tdv_object = Tdv::edit($command->tdv_id, $command->titolo , $active);

        $tdv = $this->repo->save($tdv_object);

        $this->caricaAllegato($tdv, $command->allegato);

        Event::fire(new TdvWasUpdated($tdv));

        return $tdv;
    }

    protected function caricaAllegato($tdv, $allegato)
    {

        if($allegato)
        {
            $alleagato_path = $this->file_utility->putFile($tdv->id, 'tdv_allegati', $allegato);

            $tdv->update(['allegato' => $alleagato_path]);
            
        }

    }
}
