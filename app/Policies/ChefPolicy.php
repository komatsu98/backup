<?php

namespace App\Policies;

use App\Chef;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChefPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function addRecipe(User $user, Chef $chef)
    {

        return $user->id === $chef->id;
    }
}
