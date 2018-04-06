<?php

namespace App\Policies;

use App\Chef;
use App\Recipe;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RecipePolicy
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


    /**
     * Determine if the given user can delete the given task.
     *
     * @param  User  $user
     * @param  Task  $task
     * @return bool
     */
    public function deleteRecipe(User $user, Recipe $recipe)
    {

        return $user->id === $recipe->chef_id;
    }



    public function editDetail(User $user, Recipe $recipe)
    {

        return $user->id === $recipe->chef_id;
    }
}
