<?php

namespace Ibi\Commands\StaffInfo;

use Ibi\Commands\Command;

class UpdateStaffInfoCommand extends Command
{

    public $staff_info_id;
    public $women;
    public $men;
    public $age;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($staff_info_id, $women, $men, $age)
    {
        
        $this->staff_info_id = $staff_info_id;
        $this->women = $women;
        $this->men = $men;
        $this->age = $age;
    }

}
