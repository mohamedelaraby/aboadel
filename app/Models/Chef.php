<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    protected $guarded = [];

    /**
      *  get all chef products
      * @return response
      */
      public function getChefProducts(){
        return $this->select('id','name_'.app()->getLocale().' as name','price','image')->get();
    }
}
