<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Item;
use Illuminate\Support\Facades\Auth;
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
Route::post('register', 'Api\AuthController@register');
Route::post('login', 'Api\AuthController@login');
Route::post('me', function () {
    return Auth::user();
})->middleware('auth:api');
/** Image Item API */
Route::get('image/item/{itemname}', 'ItemImgController@get_img');
/** Player API  */
Route::post('/item/increaseview', function (Request $request) {
    // dispatch(new App\Jobs\IncreaseItemViewCount(Item::find($request->id)));
    dispatch(new App\Jobs\IncreaseItemViewCount(Item::find(1)));
    return $request;
});
// END OF LINE //