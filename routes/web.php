<?php

use App\User;
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
//Route::get('/{username}', 'ProfileController@userPage');
Route::get('/fire', function () {
    event(new \App\Events\TestEvent());
    return 'ok';
});

Route::get('/shop', function () {
    return view('shop');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'auth', 'prefix' => '/ajax'], function () {
    Route::post('/shop', 'ShopController@addCart');
    Route::get('/shop', 'ShopController@getCart');
    Route::put('/shop', 'ShopController@changeAmountCart');
    Route::delete('/shop', 'ShopController@deleteItemCart');

    Route::post('/dashboard', 'PostController@');
});

