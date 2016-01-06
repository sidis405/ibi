<?php

namespace Ibi\Handlers\Commands\MenuItems;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Commands\MenuItems\UpdateMenuItemCommand;
use Ibi\Events\MenuItems\MenuItemWasUpdated;
use Ibi\Models\MenuItems;
use Ibi\Repositories\MenuItemsRepo;


class UpdateMenuItemCommandHandler
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
     * @param  UpdateMenuItemCommand  $command
     * @return void
     */
    public function handle(UpdateMenuItemCommand $command)
    {

        $menu_object = MenuItems::edit($command->menu_id, $command->slug);

        $menu = $this->repo->save($menu_object);

        $this->updateTranslations($menu, $command->menu);

        Event::fire(new MenuItemWasUpdated($menu));

        return $menu;
    }

    protected function updateTranslations($menu, $labels)
    {
        $data = [];
        
        foreach($labels as $locale => $label)
        {
            $data[$locale] = ['label' => $label];
        }

        $menu->update($data);
    }
}
