<?php

namespace App\Http\Controllers\Manage\Header;

use App\Http\Controllers\Controller;
use App\Models\Header;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class HeaderCoverController extends Controller
{

  use ImageTrait;

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
    public function store()
    {
        
        // Validate party details
    $this->validateRequest();

       // Upload party image
          if(request()->hasFile('home_image') && 
            request()->hasFile('category_image') &&
            request()->hasFile('chef_image') &&
            request()->hasFile('party_image') &&
            request()->hasFile('branches_image') &&
            request()->hasFile('occassion_image') &&
            request()->hasFile('aboutus_image') &&
            request()->hasFile('contactus_image') &&
            request()->hasFile('shareform_image')
            ){
            
              
            // Home page image        
            $home_image = $this->saveImage(request('home_image'),'Uploads/header/home_page');
            
            // Categoty header image
            $category_image = $this->saveImage(request('category_image'),'Uploads/header/category_page');
            
            //  Chefs header image
            $chef_image = $this->saveImage(request('chef_image'),'Uploads/header/chef_page/');
            
            // Party header image
            $party_image = $this->saveImage(request('party_image'),'Uploads/header/party_page/');
        
            // Branches  Header
            $branches_image = $this->saveImage(request('branches_image'),'Uploads/header/branches_page/');
            
            // Occassions header
            $occassion_image = $this->saveImage(request('occassion_image'),'Uploads/header/occassions_page/');
            
            // ABout us
            $aboutus_image = $this->saveImage(request('aboutus_image'),'Uploads/header/aboutus_page/');
              
            // contact us
            $contactus_image = $this->saveImage(request('contactus_image'),'Uploads/header/contactus_page/');
                
            // shareform
            $shareform_image = $this->saveImage(request('shareform_image'),'Uploads/header/shareform_page/');
       
          }

          // Create new header cover
          header::create([
            'home_image' => $home_image,
            'category_image' => $category_image,
            'chef_image' => $chef_image,
            'party_image' => $party_image,
            'branches_image' => $branches_image,
            'occassions_image' =>  $occassion_image,
            'aboutus_image' =>  $aboutus_image,
            'contactus_image' =>  $contactus_image,
            'shareform_image' =>  $shareform_image,
          ]);

    // Session Message saved categories
    session()->flash('msg',trans('admin.cover_added'));

    // Redirect to categories page
    return redirect()->route('admin.header.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
      return view('admin.header-cover.edit',compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Header $header)
    {
        
          $this->validateRequest();

          // Upload home image
          if(request()->hasFile('home_image')){
  
            // Delete perivious image
            $image_folder = 'Uploads/header/home_page';
  
            $this->deleteImage($header->home_image,$image_folder);
  
            // Update image
            $home_page = $this->saveImage(request('home_image'),$image_folder);
  
          } else { 
            $home_page = $header->home_image;
          }
          
          // Upload home image
          if(request()->hasFile('category_image')){
  
            // Delete perivious image
            $image_folder = 'Uploads/header/category_page';
  
            $this->deleteImage($header->category_image,$image_folder);
  
            // Update image
            $category_page = $this->saveImage(request('category_image'),$image_folder);
  
          } else { 
            $category_page = $header->category_image;
          }
          
          // Upload Chef image
          if(request()->hasFile('chef_image')){
  
            // Delete perivious image
            $image_folder = 'Uploads/header/chef_page';
  
            $this->deleteImage($header->chef_image,$image_folder);
  
            // Update image
            $chef_page = $this->saveImage(request('chef_image'),$image_folder);
  
          } else { 
            $chef_page = $header->chef_image;
          }
          
          // Upload Party image
          if(request()->hasFile('party_image')){
  
            // Delete perivious image
            $image_folder = 'Uploads/header/party_page';
  
            $this->deleteImage($header->party_image,$image_folder);
  
            // Update image
            $party_page = $this->saveImage(request('party_image'),$image_folder);
  
          } else { 
            $party_page = $header->party_image;
          } 
          
          // Upload Branch image
          if(request()->hasFile('branches_image')){
  
            // Delete perivious image
            $image_folder = 'Uploads/header/branch_page';
  
            $this->deleteImage($header->branches_image,$image_folder);
  
            // Update image
            $branches_page = $this->saveImage(request('branches_image'),$image_folder);
  
          } else { 
            $branches_page = $header->branches_image;
          } 
          
          // Upload Occassions image
          if(request()->hasFile('occassions_image')){
  
            // Delete perivious image
            $image_folder = 'Uploads/header/occassions_page';
  
            $this->deleteImage($header->occassions_image,$image_folder);
  
            // Update image
            $occassions_page = $this->saveImage(request('occassions_image'),$image_folder);
  
          } else { 
            $occassions_page = $header->occassions_image;
          }

          // Upload About us image
          if(request()->hasFile('aboutus_image')){
  
            // Delete perivious image
            $image_folder = 'Uploads/header/about_page';
  
            $this->deleteImage($header->aboutus_image,$image_folder);
  
            // Update image
            $aboutus_page = $this->saveImage(request('aboutus_image'),$image_folder);
  
          } else { 
            $aboutus_page = $header->aboutus_image;
          }
 
          // Upload contact us image
          if(request()->hasFile('contactus_image')){
  
            // Delete perivious image
            $image_folder = 'Uploads/header/contactus_page';
  
            $this->deleteImage($header->contactus_image,$image_folder);
  
            // Update image
            $contactus_page = $this->saveImage(request('contactus_image'),$image_folder);
  
          } else { 
            $contactus_page = $header->contactus_image;
          }
          
          // Upload share form image
          if(request()->hasFile('shareform_image')){
  
            // Delete perivious image
            $image_folder = 'Uploads/header/shareform_page';
  
            $this->deleteImage($header->shareform_image,$image_folder);
  
            // Update image
            $shareform_page = $this->saveImage(request('shareform_image'),$image_folder);
  
          } else { 
            $shareform_page = $header->shareform_image;
          }


          
          $header->update([
            'home_image' => $home_page,
            'category_image' => $category_page,
            'chef_image' =>  $chef_page,
            'party_image' => $party_page,
            'branches_image' => $branches_page,
            'occassions_image' => $occassions_page,
            'aboutus_image' =>$aboutus_page,
            'contactus_image' => $contactus_page,
            'shareform_image' =>  $shareform_page,
            
          ]);


      


    // Session Message saved categories
    session()->flash('msg',trans('admin.cover_updated'));

    // Redirect to categories page
    return redirect()->route('admin.header.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        
      $header->destroy($header->id);

    
        // Find the path for this image
        $home_image_path = '/Uploads/header/home_page';
        $this->deleteImage($header->home_image,$home_image_path);
        
        $category_image_path = '/Uploads/header/category_page';
        $this->deleteImage($header->category_image,$category_image_path);
        
        $chef_image_path = '/Uploads/header/chefs_page';
        $this->deleteImage($header->chef_image,$chef_image_path);
        
        $party_image_path = '/Uploads/header/party_page';
        $this->deleteImage($header->party_image,$party_image_path);
        
        $branches_image_path = '/Uploads/header/branches_page';
        $this->deleteImage($header->branches_image,$branches_image_path);
        
        $occassions_image_path = '/Uploads/header/occassions_page';
        $this->deleteImage($header->occassions_image,$occassions_image_path);
        
        $aboutus_image_path = '/Uploads/header/aboutus_page';
        $this->deleteImage($header->aboutus_image,$aboutus_image_path);
        
        $contactus_image_path = '/Uploads/header/contactus_page';
        $this->deleteImage($header->contactus_image,$contactus_image_path);
        
        $shareform_image_path = '/Uploads/header/shareform_page';
        $this->deleteImage($header->shareform_image,$shareform_image_path);

        //Session message
        session()->flash('msg', trans('admin.cover_deleted'));

   
        // Redirect to products page
        return redirect()->route('admin.header.index');
    } 



    /**
     *  Validate income request
     *  @return void
     */
    protected function validateRequest(){
      return request()->validate(
      [
          'home_image'=>'image ',
          'category_image'=>'image ',
          'chef_image'=>'image',
          'party_image'=>'image ',
          'branches_image'=>'image ',
          'occassion_image'=>'image ',
          'aboutus_image'=>'image ',
          'contactus_image'=>'image ',
          'shareform_image'=>'image ',
      ]);

    }
}