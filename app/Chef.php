<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    //
    protected $table = 'chefs';

    public function recipes()
    {
        return $this->hasMany(Recipe::class,'chef_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
