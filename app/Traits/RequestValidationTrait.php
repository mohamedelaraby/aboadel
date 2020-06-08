<?php

namespace App\Traits;

use DB;
use Illuminate\Support\Facades\File;


trait RequestValidationTrait
{

    /**
     *  Validate income products requests
     * @return Void
     */
    public function validateProductRequest(){
        return request()->validate([
            'name_ar'=>'required|max:50',
            'name_en'=>'required|max:50',
            'price'=>'required',
            'image'=>'image ',
        ]);
    }


      /**
     *  Validate income Request
     * @return void
     */
    protected function validateCategoryRequest(){
        return request()->validate([
            'name_ar'=>'required|max:65',
            'name_en'=>'required|max:65',
            'image'=>'image|required'
        ]);
    }


}
