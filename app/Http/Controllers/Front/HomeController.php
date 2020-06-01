<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     *  Display home page
     *  @return View 
     */
    public function index(){
        return view('front.home');
    }
}
