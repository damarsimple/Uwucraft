<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Itemsdata;
use App\PlayerData;
use App\Http\Controllers\ItemImgController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/** API LOGIN ROUTES */
Route::post('/login', 'Api\AuthController@login');
/** Image Item API */
Route::get('image/item/{itemname}', 'ItemImgController@get_img');
/** Player API  */
Route::get('player', function()
{
    return PlayerData::all();
});
Route::get('player/{username}', function($username)
{
    return PlayerData::find($username);
});
/** END OF LINE */

// Items API //
Route::get('items/all', function()
{
    return Itemsdata::all();
});
Route::get('items/', function()
{
    return Itemsdata::paginate(12);
});
Route::get('items/id/{id}', function($id)
{
    return Itemsdata::find($id);
});
Route::post('items', function(Request $request)
{
    return Itemsdata::create($request->all());
});
Route::put('items/{$id}', function(Request $request, $id)
{
    $itemsdata = Itemsdata::findOrFail($id);
    $itemsdata->update($request->all());
    return $itemsdata;
});
Route::delete('items/{$id}', function($id)
{
    Itemsdata::find($id)->delete();
    return 204;
});
// END OF LINE //


/** Game Notifications */
Route::get('game/{data}', function ($data)
{
    event(new \App\Events\GameEvent($data));
    return 'adding' . $data;
});

