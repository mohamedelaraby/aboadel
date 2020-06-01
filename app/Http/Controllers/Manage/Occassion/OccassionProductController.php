<?php
namespace App\Http\Controllers\Manage\Occassion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\occassion;
use App\Models\OccassionProduct;
use Illuminate\Support\Facades\File;

class OccassionProductController extends Controller
{


    /**
     * Display a listing of the occassions_OccassionProducts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        // Find all occassions_OccassionProducts
        $occassions_products = OccassionProduct::all();
        return view('admin.occassions_products.index',compact('occassions_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($occassion_id)
    {
        // Get an empty OccassionProduct
        $occassion_product = new OccassionProduct;
        return view('admin.occassions_products.create',compact('occassion_product','occassion_id'));;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validate OccassionProduct details
      $validateData =  $this->validate($request,
        [
            'name_ar'=>'required|max:50',
            'name_en'=>'required|max:50',
            'price'=>'required',
            'image'=>'image|required ',
        ]);


        // Get OccassionProduct image && occassion id
        $image = $request->file('image');
        $occassion_id = $request->input('occassion_id');


        // Get the file name with extension
        $filenameWithExt =  $image->getClientOriginalName();

        // Get the file name
        $fileName = pathinfo($filenameWithExt,PATHINFO_FILENAME);

        // Get the file extension
        $extension = $image->getClientOriginalExtension();

        // Create new filename
        $filenameToStore = $fileName . '_' . time() . '.' . $extension;

        // Upload cover image
        $image->move('Uploads/occassions/' . $occassion_id,$filenameToStore);

       // Save OccassionProduct to database
            $occassion_product = new OccassionProduct;
            
            $occassion_product->occassion_id = $occassion_id;
            $occassion_product->name_ar = strip_tags(preg_replace('/\s+/', ' ',  $request->input('name_ar')));
            $occassion_product->name_en = strip_tags(preg_replace('/\s+/', ' ',  $request->input('name_en')));
            $occassion_product->price = strip_tags(preg_replace('/\s+/', ' ',  $request->input('price')));
            $occassion_product->image = $filenameToStore;

            $occassion_product->save();


    // Session Message saved occassions_OccassionProducts
    $request->session()->flash('msg',trans('admin.occassion_product_added'));

    // Redirect to occassions_OccassionProducts page
    return redirect('admin/occassion/'.$occassion_id);

    }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find OccassionProduct
        $occassion_product = OccassionProduct::find($id);
        

        // Return show view
        return view('admin.occassions_products.show',compact('occassion_product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $occassion_product = OccassionProduct::find($id);
        return view('admin.occassions_products.edit',compact('occassion_product'));
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

        // Find the OccassionProduct
        $occassion_product= OccassionProduct::find($id);


        // Validate the OccassionProduct
        $this->validate($request, [
            'name_ar' =>'required|max:65',
            'name_en' =>'required|max:65',
            'price' =>'required|max:8',
            ]);


            // Upload OccassionProduct image
            if($request->hasFile('image')){

                //Check if the old image is exists in Upload folder
                if(file_exists(public_path('Uploads/occassions/') .$occassion_product->occassion_id . '/'. $occassion_product->image)){
                  unlink(public_path('Uploads/occassions/').$occassion_product->occassion_id . '/'. $occassion_product->image);
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
        $image->move('Uploads/categories/' . $occassion_product->occassion_id,$filenameToStore);

        } else {
            $filenameToStore = $occassion_product->image;
        }


        $occassion_product->name_ar = $request->input('name_ar');
        $occassion_product->name_en = $request->input('name_en');
        $occassion_product->price = $request->input('price');
    
        $occassion_product->image = $filenameToStore;


        $occassion_product->save();

        // session message
        session()->flash('msg',trans('admin.OccassionProduct_updated'));


       
        // Redirect to occassions_OccassionProducts page
        return redirect('admin/occassion/'.$occassion_product->occassion_id);


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
         $occassion_product = OccassionProduct::find($id);

         // Delete OccassionProduct
         $occassion_product->destroy($id);

         // Delete OccassionProduct image
        $image= $occassion_product->image;

        // Find the path for this image
        $image_path = public_path().'/Uploads/occassions/'. $occassion_product->occassion_id  . '/' .$image;

        // Delete image
        File::delete($image_path);

        
         //Session message
        session()->flash('msg', trans('admin.Occassion_Product_deleted'));

   
        // Redirect to occassions_OccassionProducts page
        return redirect('admin/occassion/'.$occassion_product->occassion_id);

    }
}
