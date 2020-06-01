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
            Route::group(['prefix' => 'product','namespace'=>'Product'], function () {

                Route::resource('/', 'ProductController');

                Route::get('/', 'ProductController@index')->name('admin.product.index');

                Route::post('/create','ProductController@create')->name('admin.product.create');

                Route::post('/{product}','ProductController@destroy')->name('admin.product.delete');

                Route::get('/{product}/edit','ProductController@edit')->name('admin.product.edit');

                Route::post('/{product}/update','ProductController@update')->name('admin.product.update');

                Route::get('/{product}','ProductController@show')->name('admin.product.show');



            });    

            
                // Categories

                Route::group(['prefix' => 'category','namespace'=>'Category'], function () {

                    Route::resource('/', 'CategoryController');
                    Route::get('/', 'CategoryController@index')->name('admin.category.index');
                    Route::get('/product/create/{category}','Product\ProductController@create')->name('admin.category.create_product');
                    Route::get('/create','CategoryController@create')->name('admin.category.create');
                    Route::post('/{category}','CategoryController@destroy')->name('admin.category.delete');
                    Route::get('/{category}/edit','CategoryController@edit')->name('admin.category.edit');
                    Route::post('/{category}/update','CategoryController@update')->name('admin.category.update');
                    Route::get('/{category}','CategoryController@show')->name('admin.category.show');

                });

                

                

                // Party

                Route::group(['prefix' => 'party','namespace'=>'Party'], function () {

                    Route::resource('/', 'PartyController');
                    Route::get('/', 'PartyController@index')->name('admin.party.index');
                    Route::get('/create','PartyController@create')->name('admin.party.create');
                    Route::post('/{party}','PartyController@destroy')->name('admin.party.delete');
                    Route::get('/{party}/edit','PartyController@edit')->name('admin.party.edit');
                    Route::post('/{party}/update','PartyController@update')->name('admin.party.update');
                    Route::get('/{party}','PartyController@show')->name('admin.party.show');

                });

                

                // Party

                Route::group(['prefix' => 'chef','namespace'=>'Chef'], function () {
                    Route::resource('/', 'ChefController');
                    Route::get('/', 'ChefController@index')->name('admin.chef.index');
                    Route::get('/create','ChefController@create')->name('admin.chef.create');
                    Route::post('/{chef}','ChefController@destroy')->name('admin.chef.delete');
                    Route::get('/{chef}/edit','ChefController@edit')->name('admin.chef.edit');
                    Route::post('/{chef}/update','ChefController@update')->name('admin.chef.update');
                    Route::get('/{chef}','ChefController@show')->name('admin.chef.show');

                });

                

                // Special occassions

                Route::group(['prefix' => 'occassion','namespace'=>'Occassion'], function () {
                    Route::resource('/', 'OccassionController');
                    Route::get('/', 'OccassionController@index')->name('admin.occassion.index');
                    Route::get('/product/create/{id}','OccassionProductController@create')->name('admin.occassion.create_product');
                    Route::get('/create','OccassionController@create')->name('admin.occassion.create');
                    Route::post('/{occassion}','OccassionController@destroy')->name('admin.occassion.delete');
                    Route::get('/{occassion}/edit','OccassionController@edit')->name('admin.occassion.edit');
                    Route::post('/{occassion}/update','OccassionController@update')->name('admin.occassion.update');
                    Route::get('/{occassion}','OccassionController@show')->name('admin.occassion.show');

                });

            

            

          

            

            //  Products

            Route::group(['prefix' => 'header','namespace'=>'Header'], function () {

                Route::resource('/', 'HeaderCoverController');

                Route::get('/', 'HeaderCoverController@index')->name('admin.header.index');

                Route::post('/create','HeaderCoverController@create')->name('admin.header.create');

                Route::post('/{header}','HeaderCoverController@destroy')->name('admin.header.delete');

                Route::get('/{header}/edit','HeaderCoverController@edit')->name('admin.header.edit');

                Route::post('/{header}/update','HeaderCoverController@update')->name('admin.header.update');



            });



    });



