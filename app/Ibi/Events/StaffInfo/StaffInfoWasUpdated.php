<?php

namespace Ibi\Events\StaffInfo;

use Event;
use Ibi\Models\StaffInfo;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class StaffInfoWasUpdated extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(StaffInfo $staff_info)
    {
        $this->staff_info = $staff_info;
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
