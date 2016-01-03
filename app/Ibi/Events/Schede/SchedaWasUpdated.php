<?php

namespace Ibi\Events\Schede;

use Event;
use Ibi\Models\SchedeSegnalazione;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SchedaWasUpdated extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(SchedeSegnalazione $scheda)
    {
        $this->scheda = $scheda;
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
