<?php

namespace App\Http\Controllers\Manage\Party;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Party;
use Illuminate\Support\Facades\File;

class PartyController extends Controller
{
/**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Find all categories
        $parties = Party::all();
        return view('admin.parties.index',compact('parties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Get an empty party
        $party = new Party;
        return view('admin.parties.create',compact('party'));
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
            'name_ar'=>'required|max:65',
            'name_en'=>'required|max:65',
            'price' =>'required|max:8',
            'image'=>'image|required ',
        ]);


        // // Upload party image
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
                $image->move('Uploads/parties/',$filenameToStore);
            }


       // Save party to database
            $party = new Party();

            $party->name_ar = strip_tags(preg_replace('/\s+/', ' ',  $request->input('name_ar')));
            $party->name_en = strip_tags(preg_replace('/\s+/', ' ',  $request->input('name_en')));
            $party->price = $request->input('price') ;
            $party->image = $filenameToStore;

            $party->save();


    // Session Message saved categories
    $request->session()->flash('msg',trans('admin.party_added'));

    // Redirect to categories page
    return redirect()->route('admin.party.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find party
        $party = Party::find($id);

        // Return show view
        return view('admin.parties.show',compact('party'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $party = Party::find($id);
        return view('admin.parties.edit',compact('party'));
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

        // Find the party
        $party = Party::find($id);


        // Validate the party
        $this->validate($request, [
            'name_ar' =>'required|max:65',
            'name_en' =>'required|max:65',
            'price' =>'required|max:8',  
            ]);


            // Upload party image
            if($request->hasFile('image')){

                //Check if the old image is exists in Upload folder
                if(file_exists(public_path('Uploads/parties/') . $party->image)){
                  unlink(public_path('Uploads/parties/').$party->image);
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
            $image->move('Uploads/parties/',$filenameToStore);

        } else {
            $filenameToStore = $party->image;
        }


        $party->name_ar = $request->input('name_ar');
        $party->name_en = $request->input('name_en');    
        $party->price = $request->input('price');    
        $party->image = $filenameToStore;


        $party->save();

        // session message
        session()->flash('msg',trans('admin.party_updated'));

        // Redirect to party
        return redirect()->route('admin.party.index');

    

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
         $party = Party::find($id);

         // Delete party
         $party->destroy($id);

         // Delete party image
        $image= $party->image;
        // Find the path for this image
        $image_path = public_path().'/Uploads/'.$image;

        // Delete image
        File::delete($image_path);

     

         //Session message
        session()->flash('msg', trans('admin.party_deleted'));

        // Redirect to party page
        return redirect()->route('admin.party.index');

    }
}