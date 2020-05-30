<?php
namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{


    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Find all categories
        $categories = Category::with('products')->get();
        return view('admin.Categories.index')->with('categories', $categories);;
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
    public function store(Request $request)
    {

        // Validate category details
      $validateData =  $this->validate($request,
        [
            'name_ar'=>'required|max:65',
            'name_en'=>'required|max:65',
            'image'=>'image|required',
        ]);


        // // Upload category image
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
                $image->move('Uploads/categories/cover_image/',$filenameToStore);
            }


       // Save category to database
            $category = new Category();

            $category->name_ar = strip_tags(preg_replace('/\s+/', ' ',  $request->input('name_ar')));
            $category->name_en = strip_tags(preg_replace('/\s+/', ' ',  $request->input('name_en')));
            $category->image = $filenameToStore;

            $category->save();


    // Session Message saved categories
    $request->session()->flash('msg',trans('admin.category_added'));

    // Redirect to categories page
    return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find category
        $category = Category::with('products')->find($id);

        // Return show view
        return view('admin.Categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.Categories.edit',compact('category'));
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

        // Find the category
        $category = Category::find($id);


        // Validate the category
        $this->validate($request, [
            'name_ar' =>'required|max:65',
            'name_en' =>'required|max:65',
           
            ]);


            // Upload category image
            if($request->hasFile('image')){

                //Check if the old image is exists in Upload folder
                if(file_exists(public_path('Uploads/categories/cover_image/') . $category->image)){
                  unlink(public_path('Uploads/categories/cover_image/').$category->image);
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
            $image->move('Uploads/categories/cover_image/',$filenameToStore);

        } else {
            $filenameToStore = $category->image;
        }


        $category->name_ar = $request->input('name_ar');
        $category->name_en = $request->input('name_en');    
        $category->image = $filenameToStore;


        $category->save();

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
    public function destroy($id)
    {

      

         // Get the photo
         $category = Category::find($id);

         // Delete category
         $category->destroy($id);

         // Delete category image
        $image= $category->image;
        // Find the path for this image
        $image_path = public_path().'/Uploads/categories/cover_image/'.$image;
        $image_path_dir = public_path().'/Uploads/categories/'.$id;

        // Delete image
        File::delete($image_path);

        if(empty($image_path_dir)){
            File::delete($image_path_dir);
        }


         //Session message
        session()->flash('msg', trans('admin.category_deleted'));

        // Redirect to category page
        return redirect()->route('admin.category.index');

    }
}
