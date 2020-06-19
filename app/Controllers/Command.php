<?php namespace App\Controllers;

use App\Libraries\WebsenderAPI;

class Command extends BaseController
{
    public $sender;
    public function __construct()
    {
        $this->sender = new WebsenderAPI('localhost', '123456789',19132);
    }

    public function index()
    {
        $msg = "Test";
        var_dump($this->sender->connect());
        echo $msg;
        if($this->sender->connect())
        {
            var_dump($this->sender->sendCommand("say " . $msg));
            echo "sended " . $msg;
        }
    }
}