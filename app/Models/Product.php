<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded =[];

    /**
     *  Get category for current product
     */
     public function category(){
        return $this->belongsTo(\App\Models\Category::class);
     }


}
