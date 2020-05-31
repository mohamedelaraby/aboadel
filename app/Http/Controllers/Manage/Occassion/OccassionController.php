<?php
namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Occassion;
use AppModels\Occassion as AppModelsOccassion;
use Illuminate\Support\Facades\File;

class OccassionController extends Controller
{


    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Find all categories
        $occassions= Occassion::with('occassions_products')->get();
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
    public function store(Request $request)
    {

        // Validate occassion details
      $validateData =  $this->validate($request,
        [
            'name_ar'=>'required|max:65',
            'name_en'=>'required|max:65',
            'image'=>'image|required ',
        ]);


        // // Upload occassion image
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
                $image->move('Uploads/occassions/cover_image',$filenameToStore);
            }


       // Save occassion to database
            $occassion = new Occassion();

            $occassion->name_ar = strip_tags(preg_replace('/\s+/', ' ',  $request->input('name_ar')));
            $occassion->name_en = strip_tags(preg_replace('/\s+/', ' ',  $request->input('name_en')));
            $occassion->image = $filenameToStore;

            $occassion->save();


    // Session Message saved categories
    $request->session()->flash('msg',trans('admin.occassion_added'));

    // Redirect to occassionspage
    return redirect()->route('admin.occassion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find occassion
        $occassion = Occassion::with('occassions_products')->find($id);

        // Return show view
        return view('admin.occassions.show',compact('occassion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $occassion = Occassion::find($id);
        return view('admin.occassions.edit',compact('occassion'));
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

        // Find the occassion
        $occassion = occassion::find($id);


        // Validate the occassion
        $this->validate($request, [
            'name_ar' =>'required|max:65',
            'name_en' =>'required|max:65',
            'desc' =>'required|max:65',
            
            ]);


            // Upload occassion image
            if($request->hasFile('image')){

                //Check if the old image is exists in Upload folder
                if(file_exists(public_path('Uploads/occassions/cover_image/') . $occassion->image)){
                  unlink(public_path('Uploads/occassions/cover_image/').$occassion->image);
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
            $image->move('Uploads/occassions/cover_image/',$filenameToStore);

        } else {
            $filenameToStore = $occassion->image;
        }


        $occassion->name_ar = $request->input('name_ar');
        $occassion->name_en = $request->input('name_en');
        $occassion->desc = $request->input('desc');
    
        $occassion->image = $filenameToStore;


        $occassion->save();

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
    public function destroy($id)
    {

      

         // Get the photo
         $occassion = occassion::find($id);

         // Delete occassion
         $occassion->destroy($id);

         // Delete occassion image
        $image= $occassion->image;
        // Find the path for this image
        $image_path = public_path().'/Uploads/occassions/cover_image/'.$image;
        $image_path_dir = public_path().'/Uploads/occassions/'.$id;

        // Delete image
        File::delete($image_path);

        if(empty($image_path_dir)){
            File::delete($image_path_dir);
        }


         //Session message
        session()->flash('msg', trans('admin.occassion_deleted'));

        // Redirect to occassion page
        return redirect()->route('admin.occassion.index');

    }
}
