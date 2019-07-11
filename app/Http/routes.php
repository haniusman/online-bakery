<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//
//Route::get('/posts', 'PostController@contact');
Route::resource('/items','ItemsController');
Route::get('/cakes','ItemsController@cakes_page');
Route::get('/cupcakes','ItemsController@cupcakes_page');
Route::get('/brownies','ItemsController@brownies_page');
Route::get('/bread','ItemsController@bread_page');
Route::get('/cookies','ItemsController@cookies_page');

Route::get('/pop', function () {
    return view('/popup',compact('items'));
});
//Route::get('/items/show','ItemsController@show')
///Route::get('/items/store','ItemsController@store');
