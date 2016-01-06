<?php

namespace Ibi\Handlers\Commands\ExternalUsers;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Commands\ExternalUsers\UpdateExternalUserCommand;
use Ibi\Events\ExternalUsers\ExternalUserWasUpdated;
use App\User;
use Ibi\Repositories\ExternalUsersRepo;


class UpdateExternalUserCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(ExternalUsersRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  UpdateExternalUserCommand  $command
     * @return void
     */
    public function handle(UpdateExternalUserCommand $command)
    {
        $active = ($command->active === 'on') ? 1 : 0;


        $external_user_object = User::edit_external($command->user_id, $active);

        $external_user = $this->repo->save($external_user_object);

        Event::fire(new ExternalUserWasUpdated($external_user));

        return $external_user;
    }
}
