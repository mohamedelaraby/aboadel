<?php

namespace App\Http\Controllers\Manage\Party;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Party;
use App\Traits\ImageTrait;
use App\Traits\RequestValidationTrait;

class PartyController extends Controller
{

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
     $this->validateProductRequest();

      // Upload chef image
      if(request()->hasFile('image')){
        $file_name = $this->saveImage(request('image'),'Uploads/parties/');
    }

   // Create new Category
   Party::create([
    'name_ar' => request('name_ar'),
    'name_en' => request('name_en'),
    'price' => request('price'),
    'image' => $file_name,
    ]);

    session()->flash('msg',trans('admin.party_added'));

    return redirect()->route('admin.party.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Party $party)
    {
        return view('admin.parties.show',compact('party'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Party $party)
    {
        return view('admin.parties.edit',compact('party'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Party $party)
    {

        // Validate category details
        $this->validateUpdatedProductRequest();

        // Upload category image
        if(request()->hasFile('image')){

       // Delete image
      $image_folder = 'Uploads/parties';

      $this->deleteImage($party->image,$image_folder);

       // Update image
       $file_name = $this->saveImage(request('image'),$image_folder);

      } else {
       $file_name = $party->image;
      }


   $party->update([
       'name_ar' => request('name_ar'),
       'name_en' => request('name_en'),
       'price' => request('price'),
       'image' => $file_name,
     ]);


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
    public function destroy(Party $party)
    {



        $party->destroy($party->id);
        $image_folder = 'Uploads/parties';

        $this->deleteImage($party->image,$image_folder);
         //Session message
        session()->flash('msg', trans('admin.party_deleted'));

        // Redirect to party page
        return redirect()->route('admin.party.index');

    }
}
