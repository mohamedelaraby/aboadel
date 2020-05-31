<?php



use Illuminate\Support\Facades\Config;

use Illuminate\Support\Facades\Route;




Route::get('admin/login', 'Manage\AdminController@login')->name('admin.login');

Route::post('admin/do_login', 'Manage\AdminController@store');



Route::group(['prefix' => 'admin','namespace'=> 'Manage'], function () {

    

    Config::set('auth.defines', 'admin');

    // Route::get('/', 'Manage\AdminController@index');

    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');

    Route::get('logout', 'AdminController@logout')->name('admin.logout');

    

    // Route::get('admin/role-register','AdminController@register');

    Route::get('role-edit/{id}','AdminController@edit')->name('admin.user.edit');

    Route::post('role-update/{id}','AdminController@update');

    Route::get('role-delete/{id}','AdminController@destroy')->name('admin.user.delete');

    

            //  Products

            Route::group(['prefix' => 'product'], function () {

                Route::resource('/', 'Product\ProductController');

                Route::get('/', 'Product\ProductController@index')->name('admin.product.index');

                Route::post('/create','Product\ProductController@create')->name('admin.product.create');

                Route::post('/{id}','Product\ProductController@destroy')->name('admin.product.delete');

                Route::get('/{id}/edit','Product\ProductController@edit')->name('admin.product.edit');

                Route::post('/{id}/update','Product\ProductController@update')->name('admin.product.update');

                Route::get('/{id}','Product\ProductController@show')->name('admin.product.show');



            });    

                // Categories

                Route::group(['prefix' => 'category'], function () {

                    Route::resource('/', 'Category\CategoryController');

                    Route::get('/', 'Category\CategoryController@index')->name('admin.category.index');

                    Route::get('/product/create/{category}','Product\ProductController@create')->name('admin.category.create_product');

                    Route::get('/create','Category\CategoryController@create')->name('admin.category.create');

                    Route::post('/{category}','Category\CategoryController@destroy')->name('admin.category.delete');

                    Route::get('/{category}/edit','Category\CategoryController@edit')->name('admin.category.edit');

                    Route::post('/{category}/update','Category\CategoryController@update')->name('admin.category.update');

                    Route::get('/{category}','Category\CategoryController@show')->name('admin.category.show');

                });

                

                

                // Party

                Route::group(['prefix' => 'party'], function () {

                    Route::resource('/', 'Manage\PartyController');

                    Route::get('/', 'Manage\PartyController@index')->name('admin.party.index');

                    Route::get('/create','Manage\PartyController@create')->name('admin.party.create');

                    Route::post('/{id}','Manage\PartyController@destroy')->name('admin.party.delete');

                    Route::get('/{id}/edit','Manage\PartyController@edit')->name('admin.party.edit');

                    Route::post('/{id}/update','Manage\PartyController@update')->name('admin.party.update');

                    Route::get('/{id}','Manage\PartyController@show')->name('admin.party.show');

                });

                

                // Party

                Route::group(['prefix' => 'chef'], function () {

                    Route::resource('/', 'Manage\ChefController');

                    Route::get('/', 'Manage\ChefController@index')->name('admin.chef.index');

                    Route::get('/create','Manage\ChefController@create')->name('admin.chef.create');

                    Route::post('/{id}','Manage\ChefController@destroy')->name('admin.chef.delete');

                    Route::get('/{id}/edit','Manage\ChefController@edit')->name('admin.chef.edit');

                    Route::post('/{id}/update','Manage\ChefController@update')->name('admin.chef.update');

                    Route::get('/{id}','Manage\ChefController@show')->name('admin.chef.show');

                });

                

                // Special occassions

                Route::group(['prefix' => 'occassion'], function () {

                    Route::resource('/', 'Manage\OccassionController');

                    Route::get('/', 'Manage\OccassionController@index')->name('admin.occassion.index');

                    Route::get('/product/create/{id}','Manage\OccassionProductController@create')->name('admin.occassion.create_product');

                    Route::get('/create','Manage\OccassionController@create')->name('admin.occassion.create');

                    Route::post('/{id}','Manage\OccassionController@destroy')->name('admin.occassion.delete');

                    Route::get('/{id}/edit','Manage\OccassionController@edit')->name('admin.occassion.edit');

                    Route::post('/{id}/update','Manage\OccassionController@update')->name('admin.occassion.update');

                    Route::get('/{id}','Manage\OccassionController@show')->name('admin.occassion.show');

                });

            

            

            //  Products

            Route::group(['prefix' => 'occassion_product'], function () {

                Route::resource('/', 'Manage\OccassionProductController');

                Route::get('/', 'Manage\OccassionProductController@index')->name('admin.occassion_product.index');

                Route::post('/create','Manage\OccassionProductController@create')->name('admin.occassion_product.create');

                Route::post('/{id}','Manage\OccassionProductController@destroy')->name('admin.occassion_product.delete');

                Route::get('/{id}/edit','Manage\OccassionProductController@edit')->name('admin.occassion_product.edit');

                Route::post('/{id}/update','Manage\OccassionProductController@update')->name('admin.occassion_product.update');

                Route::get('/{id}','Manage\OccassionProductController@show')->name('admin.occassion_product.show');



            });

            

            //  Products

            Route::group(['prefix' => 'header'], function () {

                Route::resource('/', 'Manage\HeaderCoverController');

                Route::get('/', 'Manage\HeaderCoverController@index')->name('admin.header.index');

                Route::post('/create','Manage\HeaderCoverController@create')->name('admin.header.create');

                Route::post('/{id}','Manage\HeaderCoverController@destroy')->name('admin.header.delete');

                Route::get('/{id}/edit','Manage\HeaderCoverController@edit')->name('admin.header.edit');

                Route::post('/{id}/update','Manage\HeaderCoverController@update')->name('admin.header.update');



            });



    });



