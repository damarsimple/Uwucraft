<?php

namespace App\Http\Controllers;

use App\Library\WebsenderAPI;

class ServerController extends Controller
{
    public $hosts = '';
    public $port = '';
    public $password = '';

    public function __construct()
    {
        $mc_connection =  new WebsenderAPI($this->hosts, $this->port, $this->password);
        //Check Conection
        if ($mc_connection->connect()) {
            $this->con = $mc_connection;
            $this->status = true;
        } else {
            $this->status = false;
            //abort(404, 'cant contact server');
        }
    }

    public function give($username, $items, $amount)
    {
        return $this->con->sendCommand("give $username $items $amount");
    }

    public function __destruct()
    {
        if ($this->status) {
            $this->con->disconnect();
        }
    }
}
