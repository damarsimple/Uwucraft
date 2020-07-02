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

    var $hosts = '';
    var $port = '';
    var $password = '';
    var $con;
    public $mode = 'Offline';
    public function __construct()
    {
        $mc_connection =  new WebsenderAPI($this->hosts, $this->port, $this->password);
        if ($mc_connection->connect()) {
            $this->con = $mc_connection;
            $this->status = true;
        } else {
            $this->status = false;
        }
    }
    public function proccessPayment(array $data)
    {
        if ($this->mode == true)
        {
            foreach($data as $key=>$value)
            {
                self::addTransactionHistory($data);
                $this->deliverItems($data['username'],$data['items'],$data['amount']);
                return true;
            }
        }
        return false;
    }
    public function deliverItems(array $data)
    {
        if($this->status)
        {
            return $this->con->sendCommand('give ' + $data['username'] + $data['item'] + $data['amount']);
        }
        return false;
    }
    public static function addTransactionHistory(array $data)
    {
        if( self::checkUsersExistsHistory())
        {
            return UsersTransactionHistory::insert();
        }else{
            return self::addUsersTransactionHistory();
        }

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
    public static function addUsersCart()
    {

    }
    public static function addUsersTransactionHistory()
    {

    }
    public static function checkUsersExistsCart()
    {
        return UsersCart::where();
    }
    public static function checkUsersExistsHistory()
    {

    }
    public function __destruct()
    {
        if ($this->status) {
            $this->con->disconnect();
        }
    }
}
