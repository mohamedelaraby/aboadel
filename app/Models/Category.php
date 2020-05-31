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

     /**
      *  Get  all Categories with products
      * @return query
      */
      public function getCategoryWithProducts(){
        return $this->with('products')->get();
      }

      /**
      *  Find category with products by id
      */
      public function getCategory($id){
        return $this->with('products')->find($id);
    }
}
