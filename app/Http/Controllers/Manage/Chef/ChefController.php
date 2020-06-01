<?php

namespace App\Http\Controllers\Manage\Chef;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chef;
use App\Traits\ImageTrait;
use App\Traits\RequestValidationTrait;
use Illuminate\Support\Facades\File;

class ChefController extends Controller
{


    use ImageTrait;
    use RequestValidationTrait;

    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Find all categories
        $chefs = Chef::all();
        return view('admin.chefs.index',compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Get an empty Chef
        $chef = new Chef;
        return view('admin.chefs.create',compact('chef'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        // Validate Chef details
        $this->validateProductRequest();

          // Upload chef image
          if(request()->hasFile('image')){
             $file_name = $this->saveImage(request('image'),'Uploads/chefs/');
         }
 
        // Create new Category
        Chef::create([
         'name_ar' => request('name_ar'),
         'name_en' => request('name_en'),
         'price' => request('price'),
         'image' => $file_name,
         ]);
 

    // Session Message saved categories
    session()->flash('msg',trans('admin.Chef_added'));

    // Redirect to categories page
    return redirect()->route('admin.chef.index');
    }

    /**
     * Display the specified resource.
     * @param  int $chef 
     * @return \Illuminate\Http\Response
     */
    public function show(Chef $chef)
    {
    
        return view('admin.chefs.show',compact('chef'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int $chef
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef $chef)
    {
        return view('admin.chefs.edit',compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Chef $chef)
    {

          // Validate category details
          $this->validateProductRequest();

          // Upload category image
          if(request()->hasFile('image')){
  
         // Delete image
        $image_folder = 'Uploads/chefs';
  
        $this->deleteImage($chef->image,$image_folder);
  
         // Update image
         $file_name = $this->saveImage(request('image'),$image_folder);
  
        } else {
         $file_name = $chef->image;
        }
  
      
     $chef->update([
         'name_ar' => request('name_ar'),
         'name_en' => request('name_en'),
         'price' => request('price'),
         'image' => $file_name,
       ]);
       
        // session message
        session()->flash('msg',trans('admin.Chef_updated'));

        return redirect()->route('admin.chef.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef)
    {

      
        
        $chef->destroy($chef->id);
        $image_folder = 'Uploads/chefs';

        $this->deleteImage($chef->image,$image_folder);

         //Session message
        session()->flash('msg', trans('admin.Chef_deleted'));

        // Redirect to Chef page
        return redirect()->route('admin.chef.index');

    }
}