<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Library\WebsenderAPI;
use App\Itemsdata;
use App\User;
use App\UsersCart;
use App\PlayerData;
use app\UsersTransactionHistory;

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
            abort(404, 'cant contact server');
        }
    }
    public function proccessPayment(Request $request)
    {
        //Get Username
        $username = $request->input('username');
        return $this->processCart($username);
        
    }
    private function processCart($username)
    {
        //Get Moneyand Cart
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
        }
        //$this->decrement money
        return true;
    }
    private function deliverItems($username, $item, $amount)
    {
        //Send item
        $items = Itemsdata::findOrFail($item)['minecraft_short_hand'];
        $this->con->sendCommand("give $username $items $amount");
        return true;
    }
    public static function getMoney($username)
    {
        //Get Player money from model
        return PlayerData::findOrFail($username)['money'];
    }
    public static function getPrice($item)
    {
        //Get Price from model
        return Itemsdata::findOrFail($item)['price'];
    }
    public static function incrementItemCounter($id)
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
