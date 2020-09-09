<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

use App\User;
use App\PlayerData;
use App\UsersTransactionHistory;
use App\Http\Controllers\ServerController;
use App\Item;

/** Revamp to user Auth Facades */
class ShopController extends Controller
{
    public function __construct()
    {

        //Initialize Websender
    }
    public function addCart(Request $request): bool
    {
        $id = Auth::user()->id;
        $itemid = $request->input('itemid');
        $amount = $request->input('amount');
        $data = [
            'user_id' => $id,
            'item_id' => $itemid,
            'amount' => $amount,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        return Usercart::insert($data);
    }
    private function DecrementMoney($username, $amount): void
    {
        $users = PlayerData::findOrFail($username);
        $users->money = $users->money - $amount;
        $users->save();
    }
    public static function getMoney(): int
    {
        //Get Player money from model
        $data = PlayerData::find(Auth::user()->username);
        return empty($data['money']) ? 0 : $data['money'];
    }
    public static function getCart(): array
    {
        $user = User::find(Auth::user()->id);

        $data = [
            'username' => $user->username,
            'balance' => self::getMoney(),
            'points' => rand(10, 2500),
            'cart' => self::proccesCart($user->usercart->toArray()),
            'last_update' =>  Carbon::now(), //Timestamps,
        ];
        return $data;
    }
    /**
     *    This method turn raw cart data to presentable array
     *
     * @var array
     */
    public static function proccesCart(array $proccess): array
    {
        $count = count($proccess);
        $arr = array();
        for ($i = 0; $i < $count; $i++) {
            $item = Item::find($proccess[$i]['item_id'])->toArray();
            $item['amount'] = $proccess[$i]['amount'];
            $item['cartid'] = $proccess[$i]['id'];
            array_push($arr, $item);
        }
        return $arr;
    }
    /**
     *   Change spesific amount in carts
     *
     * @var Request
     */
    public static function changeAmountCart(Request $request): void
    {
        $id = $request->input('cartid');
        $userid = $request->input('userid');
        $amount = $request->input('amount');
        //Check if auth user is indeed owner
        if (Auth::user()->id != $userid) {
            abort(403);
        }
        $cart = Usercart::find($id);
        $cart->amount = $amount;
        $cart->save();
    }
    public static function deleteItemCart(Request $request): void
    {
        $id = $request->input('cartid');
        $userid = $request->input('userid');
        //Check if auth user is indeed owner
        if (Auth::user()->id != $userid) {
            abort(403);
        }
        $cart = Usercart::find($id);
        $cart->delete();
    }
    public static function getPrice($item): int
    {
        //Get Price from model
        return Itemsdata::findOrFail($item)['price'];
    }
    private static function incrementItemCounter($id): object
    {
        return Itemsdata::findOrFail($id)->increment('counter');
    }
    private function processCart()
    {
        //Get Money and Cart
        $username = Auth::user()->username;
        $money = $this->getMoney($username);
        $cart = Userscart::find($username);
        $inventory = json_decode($cart['inventory']);
        $amount = json_decode($cart['amount']);
        //Calculate Total Price
        $totalprice = null;
        for ($i = 0; $i < count($inventory); $i++) {
            //Get Price of item
            $price = $this->getPrice($inventory[$i]);
            //Increment Total Price
            $totalprice += $price * $amount;
        }
        //Simple Check
        if ($money >= $totalprice) {
            for ($i = 0; $i < count($inventory); $i++) {
                $this->deliverItems($username, $inventory[$i], $amount[$i]);
                $this->incrementItemCounter($inventory[$i]);
            }
            $this->DecrementMoney($username, $totalprice);
            return true;
        }
        return false;
    }
    private function deliverItems($username, $item, $amount)
    {
        //Send item
        $items = Itemsdata::findOrFail($item)['minecraft_short_hand'];
        $server = new ServerController();
        return $server->give($username, $items, $amount);
    }
}
