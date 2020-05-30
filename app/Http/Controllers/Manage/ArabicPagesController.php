<?php
namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Chef;
use App\Models\Header;
use App\Models\Occassion;
use App\Models\Party;

class ArabicPagesController extends Controller
{
    /**
     *  Handle Home us page
     *  @return view
     */
    public function home(){
        $categories = Category::all();
        $occassions = Occassion::all();
        $header_cover = Header::all();
        return view('pages-ar.index',compact('categories','occassions','header_cover'));
    }

    /**
     *  Handle Contact us page
     *  @return view
     */
    public function contactUs(){
        $categories = Category::all();
        $occassions = Occassion::all();
        $header_cover = Header::all();
        return view('pages-ar.contact-us',compact('categories','occassions','header_cover'));
        
    }
    
    /**
     *  Handle about us page
     *  @return view
     */
    public function aboutUs(){
        $categories = Category::all();
        $occassions = Occassion::all();
        $header_cover = Header::all();
        return view('pages-ar.about-us',compact('categories','occassions','header_cover'));
    }
    
    /**
     *  Handle branches page
     *  @return view
     */
    public function branch(){
        $categories = Category::all();
        $occassions = Occassion::all();
        $header_cover = Header::all();
        return view('pages-ar.branches',compact('categories','occassions','header_cover'));
    }
    
    /**
     *  Handle Categories page
     *  @return view
     */
    public function category(){
        $categories = Category::all();
        $occassions = Occassion::all();
        $header_cover = Header::all();
        return view('pages-ar.category',compact('categories','occassions','header_cover'));
    } 
    
    /**
     *  Handle Categories page
     *  @return view
     */
    public function category_products($id){

        $categories = Category::all();
        $products = Category::find($id)->products;
        $occassions = Occassion::all();
        $header_cover = Header::all();
        return view('pages-ar.category_products',compact('products','occassions','categories','header_cover'));
    }
    
    /**
     *  Handle Categories page
     *  @return view
     */
    public function occassions_products($id){
        $categories = Category::all();
        $occassions_products = Occassion::find($id)->occassions_products;
        $occassions = Occassion::with('occassions_products')->get();
        $header_cover = Header::all();
        return view('pages-ar.occassions_products',compact('occassions','categories','occassions_products','header_cover'));
    }

     /**
     *  Handle Parties chosen page
     *  @return view
     */
    public function parties_chosen(){
        $parties = Party::all();
        $categories = Category::all();
        $occassions = Occassion::all();
        $header_cover = Header::all();
        
        return view('pages-ar.parties_chosen',compact('parties','occassions','categories','header_cover'));
    } 
    
    /**
     *  Handle Special Occasions  page
     *  @return view
     */
    public function special_occassions(){
        $categories = Category::all();
        $header_cover = Header::all();
        $occassions = Occassion::with('occassions_products')->get();
        return view('pages-ar.special_occassions',compact('occassions','categories','header_cover'));
    }
    
    /**
     *  Handle chef chosen  page
     *  @return view
     */
    public function chef_chosen(){

        $categories = Category::all();
        $occassions = Occassion::all();
        $chefs = Chef::all();
        $header_cover = Header::all();
        return view('pages-ar.chef_chosen',compact('occassions','categories','chefs','header_cover'));
    }
    
    /**
     *  Handle share_form  page
     *  @return view
     */
    public function share_form(){
        $categories = Category::all();
        $occassions = Occassion::all();
        $header_cover = Header::all();
        return view('pages-ar.share_form',compact('occassions','categories','header_cover'));
    }
}
