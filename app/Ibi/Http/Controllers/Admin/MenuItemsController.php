<?php

namespace Ibi\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Ibi\Repositories\MenuItemsRepo;
use Ibi\Models\Languages;
use Illuminate\Http\Request;


class MenuItemsController extends AdminController
{
    /**
     * Display a listing of the Slider.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MenuItemsRepo $menu_items_repo)
    {
        $menu = $menu_items_repo->getAll();

        return view('admin.voci-menu.index', compact('menu'));

    }

     /**
     * Show the form for creating a new Fascia.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $lingue = Languages::all();
        return view('admin.voci-menu.create', compact('lingue'));
    }



    /**
     * Store a newly created Slider in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->input();

        $menu = $this->dispatchFrom('Ibi\Commands\MenuItems\CreateMenuItemCommand', $request);
        
        return redirect()->to('/admin/voci-menu');
    }

    /**
     * Show the form for editing the specified Slider.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, MenuItemsRepo $menu_items_repo)
    {
        $menu = $menu_items_repo->getById($id);
        $lingue = Languages::all();

        $traduzioni = $menu->translations->keyBy('locale');

        return view('admin.voci-menu.edit', compact('menu', 'lingue', 'traduzioni'));
    }

    /**
     * Update the specified Slider in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $menu = $this->dispatchFrom('Ibi\Commands\MenuItems\UpdateMenuItemCommand', $request);

        flash()->success('Menu aggiornata correttamente.');

        return redirect()->to('/admin/voci-menu');
    }

    /**
     * Remove the specified Slider from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, MenuItemsRepo $menu_items_repo)
    {
        $delete = $menu_items_repo->remove($id);

        return 'true';
    }

   

}
