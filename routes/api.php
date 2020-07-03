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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */


/** API LOGIN ROUTES */
Route::post('/login', 'Api\LoginController@login');
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

/** Sends data to chats room  */
Route::get('/chats/room/{roomid}', 'ChatsController@getRoomData');
Route::get('/chats/message/{id}', 'ChatsController@getMessagedata');
Route::get('chats/subscribe/{id}', 'ChatsController@getSubscribedRoom');

Route::put('/chats/message/{id}', 'ChatsController@EditRoom');
Route::put('/chats/message/{id}', 'ChatsController@EditMessage');
Route::put('/chats/subcribe/{id}', 'ChatsController@EditRoom'); //accept room to subscribe

Route::delete('/chats/message/{id}', 'ChatsController@DeleteMessage');
Route::delete('/chats/room/{id}', 'ChatsController@DeleteRoom');

Route::post('/chats/subscribe' , 'ChatsController@addChatsSubscribe'); //accept sender +
Route::post('/chats/message' , 'ChatsController@addMessage'); //accept room id + sender + content
