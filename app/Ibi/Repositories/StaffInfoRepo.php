<?php

namespace Ibi\Repositories;

use Ibi\Models\StaffInfo;

/**
* News Repo
*/
class StaffInfoRepo 
{
    public function save(StaffInfo $staff_info)
    {
        $staff_info->save();

        return $staff_info;
    }

    public function remove($id)
    {
        $staff_info = $this->getById($id);

        $staff_info->delete();

        return true;
    }

    public function getAll()
    {
        return StaffInfo::orderBy('created_at', 'DESC')->get();
    } 

    public function getAllFront()
    {
        return StaffInfo::first();
    } 

    public function getById($id)
    {
        return StaffInfo::where('id', $id)->first();
    } 
}
