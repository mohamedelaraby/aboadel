<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'/','namespace' =>'Front','middleware' =>'Lang'], function () {
    Route::get('/','HomeController@index')->name('home');

    Route::get('category','HomeController@category')->name('front.category');
    Route::get('category/products/{id}','HomeController@category_products')->name('front.category.product');

    Route::get('chef','HomeController@chef')->name('front.chef');

    Route::get('occassion','HomeController@occassion')->name('front.occassion');
    Route::get('occassion/product/{id}','HomeController@occassion_product')->name('front.occassion-product');

    Route::get('party','HomeController@party')->name('front.party');
    Route::get('about','HomeController@about_us')->name('front.about_us');
    Route::get('contact','HomeController@contact_us')->name('front.contact');
    Route::get('stores','HomeController@stores')->name('front.stores');
    Route::get('share-form','HomeController@share_form')->name('front.share-form');


    //  Lang routes
    Route::get('lang/{lang}',function($lang){
        session()->has('lang')? session()->forget('lang') : '';
        $lang = in_array($lang,['ar','en']) ?  session()->put('lang',$lang):session()->put('lang','ar');
        return back();
    });

 });
