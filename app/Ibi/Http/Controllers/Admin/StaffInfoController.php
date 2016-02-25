<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\StaffInfoRepo;
use Illuminate\Http\Request;


class StaffInfoController extends AdminController
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StaffInfoRepo $staffinfo_repo)
    {
        $staff_info = $staffinfo_repo->getAll();

        return view('admin.staff-info.index', compact('staff_info'));

    }


    /**
     * Show the form for editing the specified News.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, StaffInfoRepo $staffinfo_repo)
    {
        $staff_info = $staffinfo_repo->getById($id);

        return view('admin.staff-info.edit', compact('staff_info'));
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $staff_info = $this->dispatchFrom('Ibi\Commands\StaffInfo\UpdateStaffInfoCommand', $request);

        return redirect()->to('/admin/lavora-con-noi/percentuale-dipendenti');
    }

}
