<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    protected $guarded =[];

    /**
     *  Products that belongs to category
     */
     public function products(){
         return $this->hasMany('App\Models\Product');
     }
}
