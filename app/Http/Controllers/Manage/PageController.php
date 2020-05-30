<?php
namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Occassion;
use App\Models\Party;

class PageController extends Controller
{
    /**
     *  Handle Home us page
     *  @return view
     */
    public function home(){
        $categories = Category::all();
        return view('index',compact('categories'));
    }

    /**
     *  Handle Contact us page
     *  @return view
     */
    public function contactUs(){
        return view('Pages.contact-us');
    }
    
    /**
     *  Handle about us page
     *  @return view
     */
    public function aboutUs(){
        return view('Pages.about-us');
    }
    
    /**
     *  Handle branches page
     *  @return view
     */
    public function branch(){
        return view('Pages.branches');
    }
    
    /**
     *  Handle Categories page
     *  @return view
     */
    public function category(){
        $categories = Category::all();
        return view('Pages.category',compact('categories'));
    } 
    
    /**
     *  Handle Categories page
     *  @return view
     */
    public function category_products($id){

        $products = Category::find($id)->products;
        
        return view('Pages.category_products',compact('products'));
    }
    
    /**
     *  Handle Categories page
     *  @return view
     */
    public function occassions_products($id){

        $occassions_products = Occassion::find($id)->occassions_products;
        $occassions = Occassion::with('occassions_products')->get();

        return view('Pages.occassions_products',compact('occassions_products','occassions'));
    }

     /**
     *  Handle Parties chosen page
     *  @return view
     */
    public function parties_chosen(){
        $parties = Party::all();
        return view('Pages.parties_chosen',compact('parties'));
    } 
    
    /**
     *  Handle Special Occasions  page
     *  @return view
     */
    public function special_occassions(){
        $occassions = Occassion::with('occassions_products')->get();
        return view('Pages.special_occasions',compact('occassions'));
    }
    
    /**
     *  Handle chef chosen  page
     *  @return view
     */
    public function chef_chosen(){
        return view('Pages.chef_chosen');
    }
    
    /**
     *  Handle share_form  page
     *  @return view
     */
    public function share_form(){
        return view('Pages.share_form');
    }
}
