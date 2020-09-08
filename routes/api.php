<?php

use App\ChatMessage;
use App\Events\GlobalNotifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Item;
use App\Friend;
use App\User;
use Carbon\Carbon;
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


/** Image Item API */
Route::get('image/item/{itemname}', 'ItemImgController@get_img');
Route::post('/item/increaseview', function (Request $request) {
    // dispatch(new App\Jobs\IncreaseItemViewCount(Item::find($request->id)));
    dispatch(new App\Jobs\IncreaseItemViewCount(Item::find(1)));
    return $request;
});
Route::get('test', function () {
    $str = ChatMessage::create(['from_id' => 1, 'to_id' => 2, 'message' => 'hello there' . time()]);
    $str->from = $str->from;
    $str->to = $str->to;
    event(new App\Events\UserMessage($str));
    return $str;
});

route::get('test2', function () {
    // for ($i = 0; $i < 10; $i++) {
    //     Friend::create([
    //         'user_id' => 21,
    //         'friends_id' => mt_rand(1, 20),
    //         'is_friend' => true,
    //     ]);
    // }
    for ($i = 0; $i < 20; $i++) {
        $faker = Faker\Factory::create();
        if ($i % 2 == 0) {
            ChatMessage::create([
                'from_id' => '12',
                'to_id' => '21',
                'message' => $faker->sentence(6)
            ]);
        } else {
            ChatMessage::create([
                'from_id' => '21',
                'to_id' => '12',
                'message' => $faker->sentence(6)
            ]);
        }
    }
    return User::find(21)->friends;
});

Route::get('event',  function () {
    broadcast(new GlobalNotifications('data here'));
});
// END OF LINE //