<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    //
    protected $table = 'recipes';



    public function chef()
    {
        return $this -> belongsTo(Chef::class, 'chef_id');
    }
    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class, 'recipe_ingredients', 'recipe_id','ingredient_id');
    }
}
