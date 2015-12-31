<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RuoliController extends Controller
{
    /**
     * Display a listing of the Fascie.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruoli = Role::with('permissions', 'users')->get();

        $permessi = Permission::all();

        return view('admin.acl.ruoli.index', compact('ruoli', 'permessi'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permessi = Permission::all();

        return view('admin.acl.ruoli.create', compact('permessi'));
    }



    /**
     * Store a newly created Fascie in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = rtrim($request->input('name'));

        if(strlen($name) > 1)
        {
            $ruolo = Role::create(['name' => $name]);

            $permessi = ($request->input('permessi')) ? $request->input('permessi') : [];

            $ruolo->permissions()->sync($permessi);
        }
        
        return redirect()->to('/admin/utenti/ruoli');
    }



    // *
    //  * Show the form for editing the specified Fascie.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    public function edit($id)
    {
        $ruolo = Role::with('permissions')->findOrFail($id);

        $permessi = Permission::all();

        return view('admin.acl.ruoli.edit', compact('ruolo', 'permessi'));
    }

    /**
     * Update the specified Fascie in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ruolo = Role::findOrFail($id);

        $name = rtrim($request->input('name'));

        if(strlen($name) > 1)
        {
            $ruolo->update(['name' => $name]);

            $permessi = ($request->input('permessi')) ? $request->input('permessi') : [];

            $ruolo->permissions()->sync($permessi);
        }

        return redirect()->to('/admin/utenti/ruoli');
    }

    /**
     * Remove the specified Fascie from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::where('id', $id)->get();

        $role->permissions()->sync([]);

        $role->delete();

        return 'true';
    }

}
