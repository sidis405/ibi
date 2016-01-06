<?php

namespace Ibi\Handlers\Commands\MenuItems;

use Ibi\Commands\MenuItems\CreateMenuItemCommand;
use Ibi\Models\MenuItems;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Repositories\MenuItemsRepo;
use Ibi\Events\MenuItems\MenuItemWasCreated;
use Event;


class CreateMenuItemCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(MenuItemsRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  CreateMenuItemCommand  $command
     * @return void
     */
    public function handle(CreateMenuItemCommand $command)
    {

        $menu_object = MenuItems::make($command->slug, $command->menu);

        $menu = $this->repo->save($menu_object);

        Event::fire(new MenuItemWasCreated($menu));

        return $menu;

    }
}
