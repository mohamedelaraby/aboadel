<?php
namespace App\Http\Controllers\Manage\Occassion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Occassion;
use App\Traits\ImageTrait;
use App\Traits\RequestValidationTrait;
use Illuminate\Support\Facades\File;

class OccassionController extends Controller
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
        $occassions= Occassion::with('occassion_products')->get();
        return view('admin.occassions.index')->with('occassions', $occassions);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Get an empty occassion
        $occassion = new Occassion;
        return view('admin.occassions.create',compact('occassion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        // Validate occassion details
      $this->validateCategoryRequest();

        // Upload category image
        if(request()->hasFile('image')){
            $file_name = $this->saveImage(request('image'),
            'Uploads/occassions/cover_image');
            }

        // Create new Category
        Occassion::create([
        'name_ar' => request('name_ar'),
        'name_en' => request('name_en'),
        'image' => $file_name,
        ]);

    // Session Message saved categories
    session()->flash('msg',trans('admin.occassion_added'));

    // Redirect to occassionspage
    return redirect()->route('admin.occassion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Occassion $occassion)
    {
        // Return show view
        return view('admin.occassions.show',compact('occassion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Occassion $occassion)
    {
        return view('admin.occassions.edit',compact('occassion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Occassion $occassion)
    {


         // Validate category details
         $this->validateUpdatedCategoryRequest();

         // Upload category image
         if(request()->hasFile('image')){

            // Delete perivious image
        $this->deleteImage($occassion->image,
        'Uploads/occassions/cover_image/');

        // Update image
        $file_name = $this->saveImage(request('image'),
        'Uploads/occassions/cover_image/');


    } else {
        // Keep the previous image
        $file_name = $occassion->image;
    }



    $occassion->update([
        'name_ar' => request('name_ar'),
        'name_en' => request('name_en'),
        'image' => $file_name,
      ]);


        // session message
        session()->flash('msg',trans('admin.occassion_updated'));

        // Redirect to occassion
        return redirect()->route('admin.occassion.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Occassion $occassion)
    {


        $occassion->destroy($occassion->id);

        $this->deleteImage($occassion->image,
        '/Uploads/occassions/cover_image/');

         //Session message
        session()->flash('msg', trans('admin.occassion_deleted'));

        // Redirect to occassion page
        return redirect()->route('admin.occassion.index');

    }
}
