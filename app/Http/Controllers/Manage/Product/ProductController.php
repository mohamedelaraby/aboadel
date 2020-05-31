<?php
namespace App\Http\Controllers\Manage\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    // Use Image Trait
    use ImageTrait;

    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Find all products
        $products = Product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Category $category)
    {
        // Get an empty product
        $product = new Product;
        $category_id = $category->id;
        return view('admin.products.create',compact('product','category_id'));;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     
        // Check for inputs
        $this->validateRequest();

        
         // Upload category image
         if(request()->hasFile('image')){
            $file_name = $this->saveImage(request('image'),'Uploads/categories/'.request('category_id'));
        }

       // Create new Category
       Product::create([
        'name_ar' => request('name_ar'),
        'name_en' => request('name_en'),
        'category_id' => request('category_id'),
        'price' => request('price'),
        'image' => $file_name,
        ]);




    // Session Message saved products
    session()->flash('msg',trans('admin.product_added'));

    // Redirect to products page
    return redirect('admin/category/'.request('category_id'));

    }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find product
        $product = Product::find($id);
        

        // Return show view
        return view('admin.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit',compact('product'));
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

        // Find the product
        $product = Product::find($id);


        // Validate the product
        $this->validate($request, [
            'name_ar' =>'required|max:65',
            'name_en' =>'required|max:65',
            'price' =>'required|max:8',
            ]);


            // Upload product image
            if($request->hasFile('image')){

                //Check if the old image is exists in Upload folder
                if(file_exists(public_path('Uploads/categories/') .$product->category_id . '/'. $product->image)){
                  unlink(public_path('Uploads/categories/').$product->category_id . '/'. $product->image);
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
        $image->move('Uploads/categories/' . $product->category_id,$filenameToStore);

        } else {
            $filenameToStore = $product->image;
        }


        $product->name_ar = $request->input('name_ar');
        $product->name_en = $request->input('name_en');
        $product->price = $request->input('price');
    
        $product->image = $filenameToStore;


        $product->save();

        // session message
        session()->flash('msg',trans('admin.product_updated'));


       
        // Redirect to products page
        return redirect('admin/category/'.$product->category_id);


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
         $product = Product::find($id);

         // Delete product
         $product->destroy($id);

         // Delete product image
        $image= $product->image;

        // Find the path for this image
        $image_path = public_path().'/Uploads/categories/'. $product->category_id  . '/' .$image;

        // Delete image
        File::delete($image_path);

        
         //Session message
        session()->flash('msg', trans('admin.product_deleted'));

   
        // Redirect to products page
        return redirect('admin/category/'.$product->category_id);

    }



    /**
     *  Validate income requests
     * @return Void
     */
    public function validateRequest(){
        return request()->validate([
            'name_ar'=>'required|max:50',
            'name_en'=>'required|max:50',
            'price'=>'required',
            'image'=>'image|required ',
        ]);
    }
}
