<?php

namespace Ibi\Events\PosizioniAperte;

use Event;
use Ibi\Models\Candidature;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CandidaturaWasCreated extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Candidature $candidatura)
    {
        $this->candidatura = $candidatura;
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
