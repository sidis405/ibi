<?php

namespace Ibi\Repositories;

use Ibi\Models\MenuItems;

/**
* MenuItems Repo
*/
class MenuItemsRepo
{
    public function save(MenuItems $item)
    {
        $item->save();

        return $item;
    }

    public function remove($id)
    {
        $item = $this->getById($id);

        $item->delete();

        return true;
    }

    public function getAll()
    {
        return MenuItems::orderBy('created_at', 'DESC')->get();
    } 

    public function getAllFront()
    {
        return MenuItems::with('translations')->get();
    } 

    public function getById($id)
    {
        return MenuItems::with('translations')->where('id', $id)->first();
    } 
}
