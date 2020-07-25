<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

use App\Itemsdata;
use App\User;
use App\UsersCart;
use App\PlayerData;
use App\UsersTransactionHistory;
use App\Http\Controllers\ServerController;

/** Revamp to user Auth Facades */
class ShopController extends Controller
{
    public function __construct()
    {

        //Initialize Websender
    }
    public static function createCart($username)
    {
        UsersCart::insert(
            [
                'username' => $username,
                'inventory' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
    public function addItemCart(Request $request)
    {
        //Initialize Variable
        $username = Auth::user()->username;
        $id = $request->input('item');
        $amount = $request->input('amount');

        if(!is_int($amount))
        {
            abort(400, 'INTEGER!');
        }
        //Check if users carts exists in records
        if (UsersCart::where('username', '=', $username)->first() == null) {
            //Create if not exists
            self::createCart($username);
        }

        //Initialize users cart object
        $cart = UsersCart::find($username);
        //Check if empty
        if (!empty($cart->inventory)) {
            $cartd = json_decode($cart->inventory);
        } else {
            //Init Array Empty
            $cartd = array();
        }

        //Check IF item already exists in inventory
        //Help I DONT KNOW HOW TO MIMPLEMENT THIS FUCNTIONS
        $arr = ['id' => $id, 'amount' => $amount];
        array_push($cartd, $arr);
        //Save to database
        $cart->inventory = json_encode($cartd);
        return $cart->save();
    }
    //Broke
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
    private function DecrementMoney($username, $amount)
    {
        $users = PlayerData::findOrFail($username);
        $users->money = $users->money - $amount;
        return $users->save();
    }
    public static function getMoney()
    {
        //Get Player money from model
        $data = PlayerData::find(Auth::user()->username);
        return empty($data['money']) ? 0 : $data['money'];
    }
    public static function getCart()
    {

        $obj = UsersCart::find(Auth::user()->username);
        //Check Null
        if ($obj == null) {
            self::createCart(Auth::user()->username);
            $inventory = array();
            $update = Carbon::now()->toDateTimeString();
        } else {
            $inventory = json_decode($obj->inventory);
            $update = $obj->updated_at;
            if ($inventory == null) {
                $inventory = array();
            }
        }
        $inv = array();
        for ($i = 0; $i < count($inventory); $i++) {
            $item = Itemsdata::find($inventory[$i]->id)->toArray();
            $item['amount'] = $inventory[$i]->amount;
            array_push($inv, $item);
        }
        $data = [
            'username' => Auth::user()->username,
            'balance' => self::getMoney(),
            'points' => rand(10, 2500),
            'cart' => $inv,
            'last_update' =>  $update,
        ];
        //return dd($inventory[1]->id);
        return $data;
    }
    public static function getPrice($item)
    {
        //Get Price from model
        return Itemsdata::findOrFail($item)['price'];
    }
    private static function incrementItemCounter($id)
    {
        return Itemsdata::findOrFail($id)->increment('counter');
    }
}
