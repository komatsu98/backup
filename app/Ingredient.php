<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';


    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'recipe_ingredients', 'recipe_id','ingredient_id');
    }

}
