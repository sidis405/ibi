<?php

namespace Ibi\Events\Comunicati;

use Event;
use Ibi\Models\Comunicati;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ComunicatoWasCreated extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Comunicati $comunicato)
    {
        $this->comunicato = $comunicato;
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
