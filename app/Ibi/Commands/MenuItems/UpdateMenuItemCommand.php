<?php

namespace Ibi\Commands\MenuItems;

use Ibi\Commands\Command;

class UpdateMenuItemCommand extends Command
{

    public $menu_id;
    public $menu;
    public $slug;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($menu_id, $menu, $slug)
    {
        $this->menu_id = $menu_id;
        $this->menu = $menu;
        $this->slug = $slug;
    }

}
