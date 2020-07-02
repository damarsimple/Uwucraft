<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/test', function()
{
$participansdata1 =
[
    'senderid' => 1,
    'name' => 'damaralbaribin',
    'username' => '@damar',
];

$participansdata2 =
[
    'senderid' => 2,
    'name' => 'heldy scarlet',
    'username' => '@scarleth',
];

$message1 =
[
    'MessageID' => 1,
    'Sender' => 1,
    'MessageData' => 'Hello Worlds',
    'Timestamp' => time(),

];

$message2 =
[
    'MessageID' => 2,
    'Sender' => 2,
    'MessageData' => 'Hello Worlds indeed',
    'Timestamp' => time(),
];
$t =
[
    'roomid' => 1,
    'DateCreated' => time(),
    'ParticipansData' => [$participansdata1, $participansdata2],
    'message' => [$message1, $message2],
];

header('Content-Type: application/json');
echo json_encode($t);

});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/fire', function () {
    event(new \App\Events\TestEvent());
    return 'ok';
});

Route::get('/shop', function()
{
    return view('shop');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/c', 'ChatsController@index');


