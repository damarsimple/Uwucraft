<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Itemsdata;
use App\PlayerData;
use App\Http\Controllers\ItemImgController;
use App\Item;
use App\Post;
use App\User;
use App\Comment;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


/** API LOGIN ROUTES */
Route::post('/login', 'Api\LoginController@login');
/** Image Item API */
Route::get('image/item/{itemname}', 'ItemImgController@get_img');
/** Player API  */
Route::get('player', function () {
    return PlayerData::all();
});
Route::get('player/{username}', function ($username) {
    return PlayerData::find($username);
});
/** END OF LINE */
// Items API //
Route::get('items/all', function () {
    return Item::all();
});
Route::get('items/', function () {
    //Example Cache Implementation
    return Cache::remember('items', 30, function () {
        return Item::with('author')->paginate(10);
    });
});
Route::get('items/id/{id}', function ($id) {
    return Item::find($id);
});
Route::post('items', function (Request $request) {
    return Item::create($request->all());
});
Route::put('items/{$id}', function (Request $request, $id) {
    $itemsdata = Itemsdata::findOrFail($id);
    $itemsdata->update($request->all());
    return $itemsdata;
});
Route::delete('items/{$id}', function ($id) {
    Itemsdata::find($id)->delete();
    return 204;
});
// END OF LINE //


/** Game Notifications */
Route::get('game/{data}', function ($data) {
    
    event(new \App\Events\GlobalNotifications($data));
    return 'adding' . $data;
});
