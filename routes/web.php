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

Route::group(['prefix'=>'/','namespace' =>'Front'], function () {
    Route::get('home','HomeController@index')->name('home');

    Route::get('category','HomeController@category')->name('front.category');
    Route::get('chef','HomeController@chef')->name('front.chef');
    Route::get('occassion','HomeController@occassion')->name('front.occassion');
    Route::get('party','HomeController@party')->name('front.party');
    Route::get('about','HomeController@about_us')->name('front.about_us');
    Route::get('contact','HomeController@contact_us')->name('front.contact');
    Route::get('stores','HomeController@stores')->name('front.stores');
    Route::get('share-form','HomeController@share_form')->name('front.share-form');

 });
