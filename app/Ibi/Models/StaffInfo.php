<?php

namespace Ibi\Models;

use Illuminate\Database\Eloquent\Model;

class StaffInfo extends Model
{
    protected $table = 'staff_info';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    

    public static function edit($staff_info_id, $women, $men, $age){

        $staff_info = static::find($staff_info_id);

        $staff_info->women = $women;
        $staff_info->men = $men;
        $staff_info->age = $age;

        return $staff_info;
    }

}
