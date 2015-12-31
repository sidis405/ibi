<?php

namespace Ibi\Handlers\Commands\InternalUsers;

use Ibi\Commands\InternalUsers\CreateInternalUserCommand;
use App\User;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Repositories\InternalUsersRepo;
use Ibi\Events\InternalUsers\InternalUserWasCreated;
use Event;


class CreateInternalUserCommandHandler
{
    public $repo;

    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(InternalUsersRepo $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Handle the command.
     *
     * @param  CreateInternalUsersCommand  $command
     * @return void
     */
    public function handle(CreateInternalUserCommand $command)
    {
        $active = ($command->active === 'on') ? 1 : 0;


        $internal_user_object = User::make_internal($command->first_name, $command->last_name, $command->email, $command->password, $active);

        $internal_user = $this->repo->save($internal_user_object);

        $internal_user->roles()->sync($command->ruolo);

        Event::fire(new InternalUserWasCreated($internal_user));

        return $internal_user;

    }
}
