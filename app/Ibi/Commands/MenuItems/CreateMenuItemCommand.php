<?php

namespace Ibi\Commands\MenuItems;

use Ibi\Commands\Command;

class CreateMenuItemCommand extends Command
{
    public $menu;
    public $slug;
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct($menu, $slug)
    {
        $this->menu = $menu;
        $this->slug = $slug;
    }
}
