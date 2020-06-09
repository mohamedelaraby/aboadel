<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


    protected $guarded =[];

    /**
     *  Products that belongs to category
     */
     public function products(){
         return $this->hasMany(Product::class);
     }


    /**
      *  get all Categories
      *  @return response
      */
      public function getCategories(){
        return $this->select('id','name_'.app()->getLocale().' as name')->get();
      }


    /**
      *  Find all Category products using id
      *  @return response
      */
      public function getCategoryProducts($id){
        return $this->find($id)->products;
    }

}
