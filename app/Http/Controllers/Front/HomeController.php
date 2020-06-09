<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Chef;
use App\Models\Header;
use App\Models\Occassion;
use App\Models\OccassionProduct;
use App\Models\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     *  Display home page
     *  @return View
     */
    public function index(){
        $categories = new Category();
        return view('front.home',[
            'home_cover' =>Header::headerCover(),
            'categories' =>$categories->getCategories(),
            ]);
    }

    /**
     *  Display Category page
     *  @return View
     */
    public function category(){

        $categories = new Category();
        return view('front.categories.categories',[
            'home_cover' =>Header::headerCover(),
            'categories' =>$categories->getCategories(),
            ]);
    }
    /**
     *  Display Category page
     *  @return View
     */
    public function category_products($id){

        $categories = new Category();
        return view('front.categories.product',[
            'home_cover' =>Header::headerCover(),
            'categories' =>$categories->getCategories(),
            'category_products' =>$categories->getCategoryProducts($id),
            ]);
    }

    /**
     *  Display chef page
     *  @return View
     */
    public function chef(){
        $chef_products = new Chef();
        return view('front.chef',[
            'home_cover' =>Header::headerCover(),
            'chef_products' =>$chef_products->getChefProducts(),
            ]);
    }

    /**
     *  Display occassions page
     *  @return View
     */
    public function occassion(){

        return view('front.occassions.occassions',[
            'home_cover' =>Header::headerCover(),
            'occassions' =>Occassion::all(),
            ]);
    }

    /**
     *  Display occassions product page
     *  @return View
     */
    public function occassion_product($id){

        $occassions = new  Occassion();

        return view('front.occassions.product',[
            'home_cover' =>Header::headerCover(),
            'occassions' =>$occassions->getOccassions(),
            'occassion_products' => $occassions->getOccassionsproducts($id),
            ]);
    }


    /**
     *  Display party selection page
     *  @return View
     */
    public function party(){

        $parties = new Party();
        return view('front.party-selection',[
            'home_cover' =>Header::headerCover(),
            'parties' =>$parties->getParties(),
            ]);
    }

    /**
     *  Display aboutus page
     *  @return View
     */
    public function about_us(){
        return view('front.aboutus',['home_cover' =>Header::headerCover()]);
    }

    /**
     *  Display contactus page
     *  @return View
     */
    public function contact_us(){
        return view('front.contactus',['home_cover' =>Header::headerCover()]);
    }

    /**
     *  Display stores locations page
     *  @return View
     */
    public function stores(){
        return view('front.our-stores',['home_cover' =>Header::headerCover()]);
    }

    /**
     *  Display share form page
     *  @return View
     */
    public function share_form(){
        return view('front.share-form',['home_cover' =>Header::headerCover()]);
    }





}
