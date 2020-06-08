<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     *  Display home page
     *  @return View
     */
    public function index(){
        $header_cover = Header::all();
        return view('front.home',compact('header_cover'));
    }

    /**
     *  Display Category page
     *  @return View
     */
    public function category(){
        $header_cover = Header::all();
        return view('front.categories',compact('header_cover'));
    }

    /**
     *  Display chef page
     *  @return View
     */
    public function chef(){
        $header_cover = Header::all();
        return view('front.chef',compact('header_cover'));
    }

    /**
     *  Display occassions page
     *  @return View
     */
    public function occassion(){
        $header_cover = Header::all();
        return view('front.occassions',compact('header_cover'));
    }


    /**
     *  Display party selection page
     *  @return View
     */
    public function party(){
        $header_cover = Header::all();
        return view('front.party-selection',compact('header_cover'));
    }

    /**
     *  Display aboutus page
     *  @return View
     */
    public function about_us(){
        $header_cover = Header::all();
        return view('front.aboutus',compact('header_cover'));
    }

    /**
     *  Display contactus page
     *  @return View
     */
    public function contact_us(){
        $header_cover = Header::all();
        return view('front.contactus',compact('header_cover'));
    }

    /**
     *  Display stores locations page
     *  @return View
     */
    public function stores(){
        $header_cover = Header::all();
        return view('front.our-stores',compact('header_cover'));
    }

    /**
     *  Display share form page
     *  @return View
     */
    public function share_form(){
        $header_cover = Header::all();
        return view('front.share-form',compact('header_cover'));
    }









}
