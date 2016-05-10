<?php

namespace Ibi\Events\FarmacoVigilanza;

use Event;
use Ibi\Models\Segnalazioni;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SegnalazioneWasCreated extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Segnalazioni $segnalazione)
    {
        $this->segnalazione = $segnalazione;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
