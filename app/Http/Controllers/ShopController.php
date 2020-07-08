<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Library\WebsenderAPI;
use App\Itemsdata;
use App\User;
use App\UsersCart;
use App\PlayerData;
use app\UsersTransactionHistory;


/** Revamp to user Auth Facades */
class ShopController extends Controller
{
    public $hosts = '';
    public $port = '';
    public $password = '';
    public $con;
    public function __construct()
    {
        //Api Requests Only
        $this->middleware('auth:api');
    
        //Initialize Websender
        $mc_connection =  new WebsenderAPI($this->hosts, $this->port, $this->password);
        //Check Conection
        if ($mc_connection->connect()) 
        {
            $this->con = $mc_connection;
            $this->status = true;
        } else {
            $this->status = false;
            //abort(404, 'cant contact server');
        }
    }
    public function addItemCart(Request $request)
    {
        //Initialize Variable
        $username = $request->input('username');
        $id = $request->input('item');
        $amount = $request->input('amount');

        //Check if users exists in records
        if( UsersCart::where('username', '=', $username)->first() == null)
        {
            //Create if not exists
            UsersCart::insert(
                [
                    'username' => $username,
                    'inventory' => null,
                    'amount' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
            
        }

        //Initialize users cart object
        $cart = UsersCart::find($username);
        //Check if empty
        if( !empty($cart->inventory))
        {
            $cartd = json_decode($cart->inventory);
            $amountd = json_decode($cart->amount);
        }else{
            //Init Array Empty
            $cartd = array();
            $amountd = array();
        }

        //Push Data to array
        array_push($cartd, $id);
        array_push($amountd, $amount);

        //Save to database
        $cart->inventory = json_encode($cartd);
        $cart->amount = json_encode($amountd);
        return $cart->save();
    }
    // public function proccessPayment(Request $request)
    // {
    //     //Get Username
    //     $username = $request->input('username');
    //     return $this->processCart($username);
        
    // }
    private function processCart($username)
    {
        //Get Money and Cart
        $money = $this->getMoney($username);
        $cart = Userscart::find($username);
        $inventory = json_decode($cart['inventory']);
        $amount = json_decode($cart['amount']);
        //Calculate Total Price
        $totalprice;
        $price;
        for ($i = 0 ; $i < count($inventory); $i++) 
        {
            //Get Price of item
            $price = $this->getPrice($inventory[$i]);
            //Increment Total Price
            $totalprice += $price * $amount;
        }
        //Simple Check
        if( $money >= $totalprice)
        {
            for ($i = 0 ; $i < count($inventory); $i++) {
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
        $this->con->sendCommand("give $username $items $amount");
        return true;
    }
    private function DecrementMoney($username, $amount)
    {
        $users = PlayerData::findOrFail($username);
        $users->money = $users->money - $amount;
        return $users->save();
    }
    public static function getMoney($username)
    {
        //Get Player money from model
        return Auth::user();
        return PlayerData::findOrFail($username)['money'];
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
    public function __destruct()
    {
        if ($this->status) 
        {
            $this->con->disconnect();
        }
    }
}
