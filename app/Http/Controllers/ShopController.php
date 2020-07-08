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
        $this->middleware('auth:api');
    
        $mc_connection =  new WebsenderAPI($this->hosts, $this->port, $this->password);
        if ($mc_connection->connect()) {
            $this->con = $mc_connection;
            $this->status = true;
        } else {
            $this->status = false;
        }
    }
    public function proccessPayment(Request $request)
    {
        $username = $request->input('username');
        $item = $request->input('name');
        $amount = $request->input('amount');
        if($this->deliverItems($username, $item, $amount))
        {
            return true;
        }
        return false;
    }
    public function deliverItems($username, $item, $amount)
    {
        if ($this->status) {
            $this->con->sendCommand("give $username $item $amount");
            return true;
        }
        return false;
    }
    public function processCart($username)
    {
        $money = $this->getMoney($username);

        $cart = $this-
    }
    public static function addTransactionHistory(array $data)
    {

    }
    public static function getMoney($username)
    {
        return PlayerData::findOrFail($username)['money'];
    }
    public static function incrementItemCounter($id)
    {
        $items = Itemsdata::findOrFail($id);
        $counter = Itemsdata::find($id)['counter'];
        return $items->update(['counter'  => $counter + 1]);
    }
    public function __destruct()
    {
        if ($this->status) {
            $this->con->disconnect();
        }
    }
}
