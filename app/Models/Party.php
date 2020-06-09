<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
     protected $guarded = [];

      /**
      *  get all Parties using multilang
       @return response
      */
      public function getParties(){
        return $this->select('id','name_'.app()->getLocale().' as name','price','image')->get();
    }
}
