<?php
namespace App\Http\Controllers\Manage\Header;

use App\Traits\ImageTrait;

class Header{

use ImageTrait;

    public function uploadImage(){
         // Upload home image
         if(request()->hasFile('category_image')){
  
            // Delete perivious image
            $image_folder = 'Uploads/header/category_page';
  
            $this->deleteImage($header->category_image,$image_folder);
  
            // Update image
            $category_page = $this->saveImage(request('category_image'),$image_folder);
  
          } else { 
            $category_page = $header->category_image;
          }
    }


}