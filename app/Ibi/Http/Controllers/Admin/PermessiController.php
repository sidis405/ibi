<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Permission;

class PermessiController extends Controller
{
    /**
     * Display a listing of the Permission.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permessi = Permission::with('roles.users')->get();

        // return $permessi;

        return view('admin.acl.permessi.index', compact('permessi'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.acl.permessi.create');
    }



    /**
     * Store a newly created Permission in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = rtrim($request->input('name'));

        if(strlen($name) > 1)
        {
            $permesso = Permission::create(['name' => $name]);
        }
        
        return redirect()->to('/admin/utenti/permessi');
    }


    // *
    //  * Show the form for editing the specified Permission.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
        $permesso = Permission::findOrFail($id);

        return view('admin.acl.permessi.edit', compact('permesso'));
    }

    /**
     * Update the specified Permission in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $permesso = Permission::findOrFail($id);

        $name = rtrim($request->input('name'));

        if(strlen($name) > 1)
        {
            $permesso->update(['name' => $name]);
        }

        return redirect()->to('/admin/utenti/permessi');
    }

    /**
     * Remove the specified Permission from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::where('id', $id)->delete();

        return 'true';
    }

}
