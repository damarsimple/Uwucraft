<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/fire', function () {
    event(new \App\Events\TestEvent());
    return 'ok';
});

Route::get('/shop', function () {
    return view('shop');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


/*
This Method return API Tokens from current authenticated users

The idea here is create a method to fetch api tokens for use throghout the app
i dont know better idea than this 
*/
Route::post('/ajax/shop', 'ShopController@addItemCart')->middleware('auth');
Route::get('/ajax/shop', 'ShopController@getCart')->middleware('auth');

Route::get('/test/{username}' , 'ShopController@getMoney');