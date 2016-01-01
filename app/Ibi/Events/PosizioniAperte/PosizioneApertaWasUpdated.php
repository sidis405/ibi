<?php

namespace Ibi\Events\PosizioniAperte;

use Event;
use Ibi\Models\PosizioniAperte;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PosizioneApertaWasUpdated extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(PosizioniAperte $posizione)
    {
        $this->posizione = $posizione;
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
