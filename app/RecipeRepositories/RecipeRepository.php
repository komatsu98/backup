<?php
/**
 * Created by PhpStorm.
 * User: komatsu
 * Date: 09/03/2018
 * Time: 14:47
 */

namespace App\RecipeRepositories;


use App\User;

class RecipeRepository
{
    public function forUser()
    {
        $chef = User::find(1)->chef;
        return $chef->recipes()
            ->orderBy('created_at', 'asc')
            ->get();
    }
}