<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Occassion extends Model
{

    protected $guarded =[];

    /**
     *  Products that belongs to category
     */
     public function occassion_products(){
         return $this->hasMany(OccassionProduct::class,'occassion_id');
     }

     /**
      *  get all occassions using multilang
       @return response
      */
      public function getOccassions(){
          return $this->select('id','name_'.app()->getLocale().' as name','image')->get();
      }

      /**
      *  Find all occassion products usign id
       @return response
      */
      public function getOccassionsproducts($id){
          return $this->find($id)->occassion_products;
      }
}

