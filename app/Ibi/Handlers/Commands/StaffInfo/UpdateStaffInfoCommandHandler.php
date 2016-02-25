<?php

namespace Ibi\Handlers\Commands\StaffInfo;

use Event;
use Ibi\Commands\StaffInfo\UpdateStaffInfoCommand;
use Ibi\Events\StaffInfo\StaffInfoWasUpdated;
use Ibi\Models\StaffInfo;
use Ibi\Repositories\StaffInfoRepo;
use Illuminate\Queue\InteractsWithQueue;

class UpdateStaffInfoCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(StaffInfoRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  UpdateStaffInfoCommand  $command
     * @return void
     */
    public function handle(UpdateStaffInfoCommand $command)
    {
        $staff_info_object = StaffInfo::edit($command->staff_info_id, $command->women , $command->men, $command->age);

        $staff_info = $this->repo->save($staff_info_object);

        Event::fire(new StaffInfoWasUpdated($staff_info));

        return $staff_info;
    }
}
