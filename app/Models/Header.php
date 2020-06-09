<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Header extends Model
{
    protected $guarded =[];

    /**
     *  Get Home page cover image
     * @return response
     */
    public function scopeHeaderCover(){
        return $this->all();
    }
}
