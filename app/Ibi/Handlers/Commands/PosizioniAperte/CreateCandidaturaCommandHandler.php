<?php

namespace Ibi\Handlers\Commands\PosizioniAperte;

use Event;
use Ibi\Commands\PosizioniAperte\CreateCandidaturaCommand;
use Ibi\Events\PosizioniAperte\CandidaturaWasCreated;
use Ibi\Models\Candidature;
use Ibi\Repositories\CandidatureRepo;
use Ibi\Utils\FileUtility;
use Illuminate\Queue\InteractsWithQueue;


class CreateCandidaturaCommandHandler
{
    public $repo;
    public $file_utility;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(CandidatureRepo $repo, FileUtility $file_utility)
    {
        $this->repo = $repo;
        $this->file_utility = $file_utility;
    }

    /**
     * Handle the command.
     *
     * @param  CreateCandidaturaCommand  $command
     * @return void
     */
    public function handle(CreateCandidaturaCommand $command)
    {

        $candidatura_object = Candidature::make($command->posizione_id, $command->nome, $command->cognome, $command->email, $command->messaggio);

        $candidatura = $this->repo->save($candidatura_object);

        $this->caricaCv($candidatura, $command->cv_path);

        Event::fire(new CandidaturaWasCreated($candidatura));

        return $candidatura;

    }

    protected function caricaCv($candidatura, $cv)
    {

        if($cv)
        {
            $cv_path = $this->file_utility->putFile($candidatura->id, 'cv', $cv);

            $candidatura->update(['cv_path' => $cv_path]);
            
        }

    }
}
