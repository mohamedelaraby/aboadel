<?php
namespace App\Http\Controllers\Manage\Occassion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\occassion;
use App\Models\OccassionProduct;
use App\Traits\ImageTrait;
use App\Traits\RequestValidationTrait;
use Illuminate\Support\Facades\File;

class OccassionProductController extends Controller
{


    use ImageTrait;
    use RequestValidationTrait;
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
    public function create(Occassion $occassion)
    {
        // Get an empty OccassionProduct
        $occassion_product = new OccassionProduct;
        $occassion_id = $occassion->id;
        return view('admin.occassions_products.create',compact('occassion_product','occassion_id'));;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // Validate OccassionProduct details
        $this->validateProductRequest();

      // Upload category image
      if(request()->hasFile('image')){

        // Delete perivious image
        $image_folder = 'Uploads/occassions'. '/' .request('occassion_id');

        $this->deleteImage(request('image'),$image_folder);

    // Update image
    $file_name = $this->saveImage(request('image'),$image_folder);
      }

    OccassionProduct::create([
        'occassion_id' => request('occassion_id'),
        'name_ar' => request('name_ar'),
        'name_en' => request('name_en'),
        'price' => request('price'),
        'image' => $file_name,
    ]);


    // Session Message saved occassions_OccassionProducts
    session()->flash('msg',trans('admin.occassion_product_added'));

    // Redirect to occassions_OccassionProducts page
    return redirect('admin/occassion'. '/' .request('occassion_id'));
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(OccassionProduct $occassion_product)
    {

        // Return show view
        return view('admin.occassions_products.show',compact('occassion_product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(OccassionProduct $occassion_product)
    {

        return view('admin.occassions_products.edit',compact('occassion_product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OccassionProduct $occassion_product)
    {


         // Validate category details
         $this->validateUpdatedProductRequest();


         // Upload category image
         if(request()->hasFile('image')){

            // Delete perivious image
            $image_folder = 'Uploads/occassions'. '/' .$occassion_product->occassion_id;

             $this->deleteImage($occassion_product->image,$image_folder);

        // Update image
        $file_name = $this->saveImage(request('image'),$image_folder);


    } else {
        // Keep the previous image
        $file_name = $occassion_product->image;
    }


    $occassion_product->update([
        'name_ar' => request('name_ar'),
        'name_en' => request('name_en'),
        'price' => request('price'),
        'image' => $file_name,
      ]);

        // session message
        session()->flash('msg',trans('admin.occassion_product_updated'));


        // Redirect to occassions Products page
        return redirect(admin_url('occassion'). '/' .$occassion_product->occassion_id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OccassionProduct $occassion_product)
    {



        $occassion_product->destroy($occassion_product->id);
        $image_folder = 'Uploads/occassions'. '/' .$occassion_product->occassion_id;;

        $this->deleteImage($occassion_product->image,$image_folder);

         //Session message
        session()->flash('msg', trans('admin.occassion_product_deleted'));


        // Redirect to occassions_OccassionProducts page
        return back();

    }
}
