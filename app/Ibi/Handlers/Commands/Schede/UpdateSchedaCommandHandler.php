<?php

namespace Ibi\Handlers\Commands\Schede;

use Event;
use Ibi\Commands\Schede\UpdateSchedaCommand;
use Ibi\Events\Schede\SchedaWasUpdated;
use Ibi\Models\SchedeSegnalazione;
use Ibi\Repositories\SchedeSegnalazioneRepo;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Utils\FileUtility;

class UpdateSchedaCommandHandler
{
    public $repo;
    public $file_utility;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(SchedeSegnalazioneRepo $repo, FileUtility $file_utility)
    {
        $this->repo = $repo;
        $this->file_utility = $file_utility;
    }

    /**
     * Handle the command.
     *
     * @param  UpdateSchedaCommand  $command
     * @return void
     */
    public function handle(UpdateSchedaCommand $command)
    {
        $active = ($command->active === 'on') ? 1 : 0;

        $scheda_object = SchedeSegnalazione::edit($command->scheda_id, $command->titolo , $active);

        $scheda = $this->repo->save($scheda_object);

        $this->caricaAllegato($scheda, $command->allegato);

        Event::fire(new SchedaWasUpdated($scheda));

        return $scheda;
    }

    protected function caricaAllegato($scheda, $allegato)
    {

        if($allegato)
        {
            $alleagato_path = $this->file_utility->putFile($scheda->id, 'schede_allegati', $allegato);

            $scheda->update(['allegato' => $alleagato_path]);
            
        }

    }
}
