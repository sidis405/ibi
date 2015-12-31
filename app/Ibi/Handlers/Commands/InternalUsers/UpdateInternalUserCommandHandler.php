<?php

namespace Ibi\Handlers\Commands\InternalUsers;

use Event;
use Illuminate\Queue\InteractsWithQueue;
use Ibi\Commands\InternalUsers\UpdateInternalUserCommand;
use Ibi\Events\InternalUsers\InternalUserWasUpdated;
use App\User;
use Ibi\Repositories\InternalUsersRepo;


class UpdateInternalUserCommandHandler
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
     * @param  UpdateInternalUserCommand  $command
     * @return void
     */
    public function handle(UpdateInternalUserCommand $command)
    {
        $active = ($command->active === 'on') ? 1 : 0;

        $internal_user_object = User::edit_internal($command->user_id, $command->first_name, $command->last_name, $command->email, $active);

        $internal_user = $this->repo->save($internal_user_object);

        $internal_user->roles()->sync($command->ruolo);

        if($command->password)
        {
            $internal_user->update(['password' => bcrypt($command->password)]);
        }

        Event::fire(new InternalUserWasUpdated($internal_user));

        return $internal_user;
    }
}
