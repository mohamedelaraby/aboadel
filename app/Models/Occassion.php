<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occassion extends Model
{
    
    protected $guarded =[];

    /**
     *  Products that belongs to category
     */
     public function occassions_products(){
         return $this->hasMany('App\Models\OccassionProduct');
     }
}

