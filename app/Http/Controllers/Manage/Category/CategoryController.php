<?php
namespace App\Http\Controllers\Manage\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\ImageTrait;
use App\Traits\RequestValidationTrait;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{

    // Use Image Trait
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
        $categories = new  Category;
        return view('admin.Categories.index',['categories'=>$categories->getCategoryWithProducts()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Get an empty category
        $category = new Category;
        return view('admin.Categories.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        // Validate category details
        $this->validateCategoryRequest();


         // Upload category image
            if(request()->hasFile('image')){
                $file_name = $this->saveImage(request('image'),'Uploads/categories/cover_image/');
            }

           // Create new Category
           Category::create([
            'name_ar' => request('name_ar'),
            'name_en' => request('name_en'),
            'image' => $file_name,
        ]);

    // Session Message saved categories
    session()->flash('msg',trans('admin.category_added'));

    // Redirect to categories page
    return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        
        // Return show view
        return view('admin.Categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        
        return view('admin.Categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Category $category)
    {

         // Validate category details
         $this->validateCategoryRequest();

         // Upload category image
         if(request()->hasFile('image')){

            // Delete perivious image
        $this->deleteImage($category->image,'Uploads/categories/cover_image');

        // Update image
        $file_name = $this->saveImage(request('image'),'Uploads/categories/cover_image/');


    } else {
        // Keep the previous image
        $file_name = $category->image;
    }

     
     
    $category->update([
        'name_ar' => request('name_ar'),
        'name_en' => request('name_en'),
        'image' => $file_name,
      ]);

    // session message
    session()->flash('msg',trans('admin.category_updated'));

    // Redirect to category
    return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {

      

        $category->destroy($category->id);
        $this->deleteImage($category->image,'Uploads/categories/cover_image/');

         //Session message
        session()->flash('msg', trans('admin.category_deleted'));

        // Redirect to category page
        return redirect()->route('admin.category.index');


    }

  
}
