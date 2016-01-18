<?php

namespace Ibi\Handlers\Commands\FarmacoVigilanza;

use Event;
use Ibi\Commands\FarmacoVigilanza\CreateSegnalazioneCommand;
use Ibi\Events\FarmacoVigilanza\SegnalazioneWasCreated;
use Ibi\Models\Segnalazioni;
use Ibi\Repositories\SegnalazioniRepo;
use Illuminate\Queue\InteractsWithQueue;


class CreateSegnalazioneCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(SegnalazioniRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  CreateSegnalazioneCommand  $command
     * @return void
     */
    public function handle(CreateSegnalazioneCommand $command)
    {

        $segnalazione_object = Segnalazioni::make($command->nome, $command->cognome, $command->dob, $command->email,  $command->messaggio);

        $segnalazione = $this->repo->save($segnalazione_object);

        Event::fire(new SegnalazioneWasCreated($segnalazione));

        return $segnalazione;

    }

}
