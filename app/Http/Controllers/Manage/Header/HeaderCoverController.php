<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class HeaderCoverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers = Header::all();
        return view('admin.header-cover.index',compact('headers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $header = new Header;
        return view('admin.header-cover.create',compact('header'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // Validate party details
      $validateData =  $this->validate($request,
      [
          'home_image'=>'image|required ',
          'category_image'=>'image|required ',
          'chef_image'=>'image|required|',
          'party_image'=>'image|required ',
          'branches_image'=>'image|required ',
          'occassion_image'=>'image|required ',
          'aboutus_image'=>'image|required ',
          'contactus_image'=>'image|required ',
          'shareform_image'=>'image|required ',
      ]);


      // // Upload party image
          if($request->hasFile('home_image') && 
            $request->hasFile('category_image') &&
            $request->hasFile('chef_image') &&
            $request->hasFile('party_image') &&
            $request->hasFile('branches_image') &&
            $request->hasFile('occassion_image') &&
            $request->hasFile('aboutus_image') &&
            $request->hasFile('contactus_image') &&
            $request->hasFile('shareform_image')
            ){
              // Get image header images
              $home_image = $request->file('home_image');
              $home_image_name = $home_image->getClientOriginalName();
              $fileName = pathinfo($home_image_name,PATHINFO_FILENAME);
              $extension = $home_image->getClientOriginalExtension();
              $home_page = $fileName . '_' . time() . '.' . $extension;
              $home_image->move('Uploads/header/home_page/',$home_page);

            //   Categoty header image
              $category_image = $request->file('category_image');

                $category_image_name = $category_image->getClientOriginalName();
                $fileName = pathinfo($category_image_name,PATHINFO_FILENAME);
                $extension = $category_image->getClientOriginalExtension();
                $category_page = $fileName . '_' . time() . '.' . $extension;
                $category_image->move('Uploads/header/category_page/',$category_page);



                //  Chefs header image
              $chef_image = $request->file('chef_image');
               // Get image name
               $chef_image_name = $chef_image->getClientOriginalName();
               $fileName = pathinfo($chef_image_name,PATHINFO_FILENAME);
               $extension = $chef_image->getClientOriginalExtension();
               $chef_page = $fileName . '_' . time() . '.' . $extension;
               $chef_image->move('Uploads/header/chef_page/',$chef_page);


            //    Party header image
              $party_image = $request->file('party_image');
              $party_image_name = $party_image->getClientOriginalName();
              $fileName = pathinfo($party_image_name,PATHINFO_FILENAME);
              $extension = $party_image->getClientOriginalExtension();
              $party_page = $fileName . '_' . time() . '.' . $extension;
              $party_image->move('Uploads/header/party_page/',$party_page);

              // Branches  Header
              $branches_image = $request->file('branches_image');
              $branches_image_name = $branches_image->getClientOriginalName();
              $fileName = pathinfo($branches_image_name,PATHINFO_FILENAME);
              $extension = $branches_image->getClientOriginalExtension();
              $branches_page = $fileName . '_' . time() . '.' . $extension;
              $branches_image->move('Uploads/header/branches_page/',$branches_page);
              

              // Occassions header
              $occassions_image = $request->file('occassion_image');
              $occassions_image_name = $occassions_image->getClientOriginalName();
              $fileName = pathinfo($occassions_image_name,PATHINFO_FILENAME);
              $extension = $occassions_image->getClientOriginalExtension();
              $occassions_page = $fileName . '_' . time() . '.' . $extension;
              $occassions_image->move('Uploads/header/occassions_page/',$occassions_page);
              
              // ABout us
              $aboutus_image = $request->file('aboutus_image');
              $aboutus_image_name = $aboutus_image->getClientOriginalName();
              $fileName = pathinfo($aboutus_image_name,PATHINFO_FILENAME);
              $extension = $aboutus_image->getClientOriginalExtension();
              $aboutus_page = $fileName . '_' . time() . '.' . $extension;
              $aboutus_image->move('Uploads/header/aboutus_page/',$aboutus_page);


              $contactus_image = $request->file('contactus_image');
              $contactus_image_name = $contactus_image->getClientOriginalName();
              $fileName = pathinfo($contactus_image_name,PATHINFO_FILENAME);
              $extension = $contactus_image->getClientOriginalExtension();
              $contactus_page = $fileName . '_' . time() . '.' . $extension;
              $contactus_image->move('Uploads/header/contactus_page/',$contactus_page);


              $shareform_image = $request->file('shareform_image');
              $shareform_image_name = $shareform_image->getClientOriginalName();
              $fileName = pathinfo($shareform_image_name,PATHINFO_FILENAME);
              $extension = $shareform_image->getClientOriginalExtension();
              $shareform_page = $fileName . '_' . time() . '.' . $extension;
              $shareform_image->move('Uploads/header/shareform_page/',$shareform_page);

          }


     // Save party to database
          $header = new Header;

          $header->home_image = $home_page;
          $header->category_image = $category_page;
          $header->chef_image = $chef_page;
          $header->party_image = $party_page;
          $header->branches_image = $branches_page;
          $header->occassions_image = $occassions_page;
          $header->aboutus_image = $aboutus_page;
          $header->contactus_image = $contactus_page;
          $header->shareform_image = $shareform_page;

          $header->save();


    // Session Message saved categories
    $request->session()->flash('msg',trans('admin.cover_added'));

    // Redirect to categories page
    return redirect()->route('admin.header.index');
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $header = Header::find($id);
      return view('admin.header-cover.edit',compact('header'));
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
        
       
      $header_image = Header::find($id);
      

          /** [ Home image Update ] */
          if($request->hasFile('home_image')){
            // Home page check
            if(file_exists(public_path('Uploads/header/home_page') . '/'. $header_image->home_image)){
              unlink(public_path('Uploads/header/home_page').'/'. $header_image->home_image);
            } 
            
          // Get image header images
          $home_image = $request->file('home_image');
          $home_image_name = $home_image->getClientOriginalName();
          $fileName = pathinfo($home_image_name,PATHINFO_FILENAME);
          $extension = $home_image->getClientOriginalExtension();
          $home_page = $fileName . '_' . time() . '.' . $extension;
          $home_image->move('Uploads/header/home_page/',$home_page);
          } else {
            $home_page = $header_image->home_image;
          }


            if($request->hasFile('category_image')) {
                // category page check
                if(file_exists(public_path('Uploads/header/category_page/') . '/'. $header_image->category_image)){
                  unlink(public_path('Uploads/header/category_page').'/'. $header_image->category_image);
                }
              //   Categoty header image
              $category_image = $request->file('category_image');

              $category_image_name = $category_image->getClientOriginalName();
              $fileName = pathinfo($category_image_name,PATHINFO_FILENAME);
              $extension = $category_image->getClientOriginalExtension();
              $category_page = $fileName . '_' . time() . '.' . $extension;
              $category_image->move('Uploads/header/category_page/',$category_page);
            } else {
              $category_page = $header_image->category_image;
            }

            //  Chef image
            if($request->hasFile('chef_image') ){
              // Chef page check
              if(file_exists(public_path('Uploads/header/chef_page/') . '/'. $header_image->chef_image)){
                unlink(public_path('Uploads/header/chef_page').'/'. $header_image->chef_image);
              }

              //  Chefs header image
              $chef_image = $request->file('chef_image');
              // Get image name
              $chef_image_name = $chef_image->getClientOriginalName();
              $fileName = pathinfo($chef_image_name,PATHINFO_FILENAME);
              $extension = $chef_image->getClientOriginalExtension();
              $chef_page = $fileName . '_' . time() . '.' . $extension;
              $chef_image->move('Uploads/header/chef_page/',$chef_page);
            } else {
              $chef_page = $header_image->chef_image;
            }
           
            //  Party image
           if($request->hasFile('party_image')){
              // Chef page check
              if(file_exists(public_path('Uploads/header/party_page/') . '/'. $header_image->party_image)){
                unlink(public_path('Uploads/header/party_page').'/'. $header_image->party_image);
              }

              //    Party header image
              $party_image = $request->file('party_image');
              $party_image_name = $party_image->getClientOriginalName();
              $fileName = pathinfo($party_image_name,PATHINFO_FILENAME);
              $extension = $party_image->getClientOriginalExtension();
              $party_page = $fileName . '_' . time() . '.' . $extension;
              $party_image->move('Uploads/header/party_page/',$party_page);
           } else {
            $party_page = $header_image->party_image;
           }


          //   Branches image
           if ($request->hasFile('branches_image')){
              // Chef page check
              if(file_exists(public_path('Uploads/header/branches_page/') . '/'. $header_image->branches_image)){
                unlink(public_path('Uploads/header/branches_page').'/'. $header_image->branches_image);
              }

              // Branches  Header
              $branches_image = $request->file('branches_image');
              $branches_image_name = $branches_image->getClientOriginalName();
              $fileName = pathinfo($branches_image_name,PATHINFO_FILENAME);
              $extension = $branches_image->getClientOriginalExtension();
              $branches_page = $fileName . '_' . time() . '.' . $extension;
              $branches_image->move('Uploads/header/branches_page/',$branches_page);
            } else {
              $branches_page = $header_image->branches_image;
           }


          //  Occassions image
            if($request->hasFile('occassion_image')){
                  // Chef page check
                  if(file_exists(public_path('Uploads/header/occassion_page/') . '/'. $header_image->occassions_image)){
                    unlink(public_path('Uploads/header/occassions_page').'/'. $header_image->occassions_image);
                  }
                // Occassions header
                $occassions_image = $request->file('occassion_image');
                $occassions_image_name = $occassions_image->getClientOriginalName();
                $fileName = pathinfo($occassions_image_name,PATHINFO_FILENAME);
                $extension = $occassions_image->getClientOriginalExtension();
                $occassions_page = $fileName . '_' . time() . '.' . $extension;
                $occassions_image->move('Uploads/header/occassions_page/',$occassions_page);
            }else {
              $occassions_page = $header_image->occassions_image;
            }

            // About us image
            if($request->hasFile('aboutus_image')){
              // Chef page check
              if(file_exists(public_path('Uploads/header/aboutus_page/') . '/'. $header_image->aboutus_image)){
                unlink(public_path('Uploads/header/aboutus_page').'/'. $header_image->aboutus_image);
              }
              // ABout us
              $aboutus_image = $request->file('aboutus_image');
              $aboutus_image_name = $aboutus_image->getClientOriginalName();
              $fileName = pathinfo($aboutus_image_name,PATHINFO_FILENAME);
              $extension = $aboutus_image->getClientOriginalExtension();
              $aboutus_page = $fileName . '_' . time() . '.' . $extension;
              $aboutus_image->move('Uploads/header/aboutus_page/',$aboutus_page);
            } else {
              $aboutus_page = $header_image->aboutus_image;
            }

            //  Contact us page
            if($request->hasFile('contactus_image')){
              // Chef page check
              if(file_exists(public_path('Uploads/header/contactus_page/') . '/'. $header_image->contactus_image)){
                unlink(public_path('Uploads/header/contactus_page').'/'. $header_image->contactus_image);
              }
              $contactus_image = $request->file('contactus_image');
              $contactus_image_name = $contactus_image->getClientOriginalName();
              $fileName = pathinfo($contactus_image_name,PATHINFO_FILENAME);
              $extension = $contactus_image->getClientOriginalExtension();
              $contactus_page = $fileName . '_' . time() . '.' . $extension;
              $contactus_image->move('Uploads/header/contactus_page/',$contactus_page);
            }else {
              $contactus_page = $header_image->contactus_image;
            }

            //  Share form image
            if($request->hasFile('shareform_image')){
              // Chef page check
              if(file_exists(public_path('Uploads/header/shareform_page/') . '/'. $header_image->shareform_image)){
                unlink(public_path('Uploads/header/shareform_page').'/'. $header_image->shareform_image);
              }
              $shareform_image = $request->file('shareform_image');
              $shareform_image_name = $shareform_image->getClientOriginalName();
              $fileName = pathinfo($shareform_image_name,PATHINFO_FILENAME);
              $extension = $shareform_image->getClientOriginalExtension();
              $shareform_page = $fileName . '_' . time() . '.' . $extension;
              $shareform_image->move('Uploads/header/shareform_page/',$shareform_page);
            } else {
              $shareform_page = $header_image->shareform_image;
            }
            


          $header_image->home_image = $home_page;
          $header_image->category_image = $category_page;
          $header_image->chef_image = $chef_page;
          $header_image->party_image = $party_page;
          $header_image->branches_image = $branches_page;
          $header_image->occassions_image = $occassions_page;
          $header_image->aboutus_image = $aboutus_page;
          $header_image->contactus_image = $contactus_page;
          $header_image->shareform_image = $shareform_page;

          $header_image->save();


    // Session Message saved categories
    $request->session()->flash('msg',trans('admin.cover_updated'));

    // Redirect to categories page
    return redirect()->route('admin.header.index');
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
         $header_image = Header::find($id);

         // Delete product
         $header_image->destroy($id);

         // Delete product image
        $home_image= $header_image->home_image;
        $category_image= $header_image->category_image;
        $party_image= $header_image->party_image;
        $branches_image= $header_image->branches_image;
        $occassions_image= $header_image->occassions_image;
        $aboutus_image= $header_image->aboutus_image;
        $chef_image= $header_image->chef_image;
        $contactus_image= $header_image->contactus_image;
        $shareform_image= $header_image->shareform_image;

        // Find the path for this image
        $home_image_path = public_path().'/Uploads/header/home_page' . '/' .$home_image;
        $category_image_path = public_path().'/Uploads/header/category_page' . '/' .$category_image;
        $chef_image_path = public_path().'/Uploads/header/chefs_page' . '/' .$chef_image;
        $party_image_path = public_path().'/Uploads/header/party_page' . '/' .$party_image;
        $branches_image_path = public_path().'/Uploads/header/branches_page' . '/' .$branches_image;
        $occassions_image_path = public_path().'/Uploads/header/occassions_page' . '/' .$occassions_image;
        $aboutus_image_path = public_path().'/Uploads/header/aboutus_page' . '/' .$aboutus_image;
        $contactus_image_path = public_path().'/Uploads/header/contactus_page' . '/' .$contactus_image;
        $shareform_image_path = public_path().'/Uploads/header/shareform_page' . '/' .$shareform_image;

        // Delete image
        File::delete($home_image_path);
        File::delete($category_image_path);
        File::delete($chef_image_path);
        File::delete($party_image_path);
        File::delete($branches_image_path);
        File::delete($occassions_image_path);
        File::delete($aboutus_image_path);
        File::delete($contactus_image_path);
        File::delete($shareform_image_path);

        
         //Session message
        session()->flash('msg', trans('admin.cover_deleted'));

   
        // Redirect to products page
        return redirect()->route('admin.header.index');
    } 
}