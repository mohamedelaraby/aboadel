<?php
namespace App\Http\Controllers\Manage\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Traits\ImageTrait;
use App\Traits\RequestValidationTrait;


class ProductController extends Controller
{

    // Use Image Trait
    use ImageTrait;
    use RequestValidationTrait;

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
    public function create(Category $category)
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
    public function store()
    {


        // Check for inputs
        $this->validateProductRequest();


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
    return redirect('admin/category'. '/' .request('category_id'));

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // Return show view
        return view('admin.products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $product = Product::find($product->id);
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product)
    {


        // Validate category details
        $this->validateProductRequest();


        // Upload category image
        if(request()->hasFile('image')){

           // Delete perivious image
           $image_folder = 'Uploads/categories'. '/' .$product->category_id;

            $this->deleteImage($product->image,$image_folder);

       // Update image
       $file_name = $this->saveImage(request('image'),$image_folder);


   } else {
       // Keep the previous image
       $file_name = $product->image;
   }


   $product->update([
       'name_ar' => request('name_ar'),
       'name_en' => request('name_en'),
       'price' => request('price'),
       'image' => $file_name,
     ]);


        // session message
        session()->flash('msg',trans('admin.product_updated'));

        // Redirect to products page
        return redirect('admin/category'. '/' .$product->category_id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {


        $product->destroy($product->id);
        $image_folder = 'Uploads/categories'. '/' .$product->category_id;;

        $this->deleteImage($product->image,$image_folder);


         //Session message
        session()->flash('msg', trans('admin.product_deleted'));


        // Redirect to products page
        return redirect('admin/category/'.$product->category_id);

    }

}
