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
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/ajax/shop', 'ShopController@addItemCart')->middleware('auth');
Route::get('/ajax/shop', 'ShopController@getCart')->middleware('auth');

Route::get('/test/{username}' , 'ShopController@getMoney');