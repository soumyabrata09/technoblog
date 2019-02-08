<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    //c_sousen as the following piece of code is being called multiple times in the various page controllers 
    //therefore it is best way to create a method inside the Product model and the we are free to call this 
    // following method anywherer we desire
    public function scopeProductRecommender($query){
    
       return $query->inRandomOrder()->take(4);
    }
}
