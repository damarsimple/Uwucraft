<?php

use App\Friend;
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
Route::get('/test', function () {
    $img = Image::make(storage_path('image/item/acacia_boat.png'))->resize(300, 200);
    return $img->response('jpg');
});
// Route::get('/test', function () {
//     $data =      [
//         'id'=> 11,
//         'user_id' => 1,
//         'post_id' => 40,
//         'content' => 'bruh moment',
//         'created_at' => Carbon::now(),
//         'updated_at' => Carbon::now(),
//         'user' => User::find(1),
//     ];
//     broadcast(new \App\Events\PostEvent($data));
//     return $data;
// });

Route::get('/fire', function () {
    event(new \App\Events\TestEvent());
    return 'ok';
});

Route::get('/shop', function () {
    return view('shop');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/chat', function () {
    return view('chat');
});
use App\Item;
Route::group(['middleware' => 'auth', 'prefix' => '/ajax'], function () {
    Route::post('/shop', 'ShopController@addCart');
    Route::get('/shop', 'ShopController@getCart');
    Route::put('/shop', 'ShopController@changeAmountCart');
    Route::delete('/shop', 'ShopController@deleteItemCart');

    Route::post('/dashboard', 'PostController@');

    Route::get('/friend', function () {
        $b = Friend::where('user_id', Auth::user()->id);
        return $b->with('friend')->get();
    });

    Route::get('/test', function () {
       
        return Item::with('author')->get();
    });
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', 'PostController@index');
        Route::post('/', 'PostController@store');
    });
});
