<?php

namespace Ibi\Events\Schede;

use Event;
use Ibi\Models\Tdv;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TdvWasUpdated extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Tdv $tdv)
    {
        $this->tdv = $tdv;
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
