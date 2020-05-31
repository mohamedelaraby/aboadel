<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chef;
use Illuminate\Support\Facades\File;

class ChefController extends Controller
{
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
    public function store(Request $request)
    {

        // Validate Chef details
      $validateData =  $this->validate($request,
        [
            'name_ar'=>'required|max:65',
            'name_en'=>'required|max:65',
            'price' =>'required|max:8',
            'image'=>'image|required',
        ]);


        // // Upload Chef image
            if($request->hasFile('image')){
                // Get image
                $image = $request->file('image');

                // Get image name
                $image_name = $image->getClientOriginalName();
                  // Get the file name
                $fileName = pathinfo($image_name,PATHINFO_FILENAME);

                // Get the file extension
                $extension = $image->getClientOriginalExtension();
                // $extension = $image_name->getClientOriginalExtension();

                // Create new filename
                $filenameToStore = $fileName . '_' . time() . '.' . $extension;

                // Upload image
                $image->move('Uploads/chefs/',$filenameToStore);
            }


       // Save Chef to database
            $chef = new Chef();

            $chef->name_ar = strip_tags(preg_replace('/\s+/', ' ',  $request->input('name_ar')));
            $chef->name_en = strip_tags(preg_replace('/\s+/', ' ',  $request->input('name_en')));
            $chef->price = $request->input('price') ;
            $chef->image = $filenameToStore;

            $chef->save();


    // Session Message saved categories
    $request->session()->flash('msg',trans('admin.Chef_added'));

    // Redirect to categories page
    return redirect()->route('admin.chef.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find Chef
        $chef = Chef::find($id);

        // Return show view
        return view('admin.chefs.show',compact('chef'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chef = Chef::find($id);
        return view('admin.chefs.edit',compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filenameToStore = '';

        // Find the Chef
        $chef = Chef::find($id);


        // Validate the Chef
        $this->validate($request, [
            'name_ar' =>'required|max:65',
            'name_en' =>'required|max:65',
            'price' =>'required|max:8',  
            ]);


            // Upload Chef image
            if($request->hasFile('image')){

                //Check if the old image is exists in Upload folder
                if(file_exists(public_path('Uploads/chefs/') . $chef->image)){
                  unlink(public_path('Uploads/chefs/').$chef->image);
                }

            // Get image
            $image = $request->file('image');

            // Get image name
            $image_name = $image->getClientOriginalName();

            // Get the file name
            $fileName = pathinfo($image_name,PATHINFO_FILENAME);

            // Get the file extension
            $extension = $image->getClientOriginalExtension();

            // Create new filename
            $filenameToStore = $fileName . '_' . time() . '.' . $extension;

            // Upload image
            $image->move('Uploads/chefs/',$filenameToStore);

        } else {
            $filenameToStore = $chef->image;
        }


        $chef->name_ar = $request->input('name_ar');
        $chef->name_en = $request->input('name_en');    
        $chef->price = $request->input('price');    
        $chef->image = $filenameToStore;


        $chef->save();

        // session message
        session()->flash('msg',trans('admin.Chef_updated'));

        // Redirect to Chef
        return redirect()->route('admin.chef.index');

    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      

         // Get the photo
         $chef = Chef::find($id);

         // Delete Chef
         $chef->destroy($id);

         // Delete Chef image
        $image= $chef->image;
        // Find the path for this image
        $image_path = public_path().'/Uploads/chefs/'.$image;

        // Delete image
        File::delete($image_path);

     

         //Session message
        session()->flash('msg', trans('admin.Chef_deleted'));

        // Redirect to Chef page
        return redirect()->route('admin.chef.index');

    }
}