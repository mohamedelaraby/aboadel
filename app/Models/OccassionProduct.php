<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OccassionProduct extends Model
{
     protected $guarded =[];

    /**
     *  Get category for current product
     */

     public function occassion(){
        return $this->belongsTo('\App\Models\Occassion');
     }
}
