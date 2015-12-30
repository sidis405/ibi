<?php

namespace Ibi\Events\CategorieTerapeutiche;

use Event;
use Ibi\Models\CategorieTerapeutiche;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CategoriaTerapeuticaWasCreated extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(CategorieTerapeutiche $categoria_terapeutica)
    {
        $this->categoria_terapeutica = $categoria_terapeutica;
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
