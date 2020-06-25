<?php

namespace App;


use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

class Serverdata
{

    public $host = 'localhost';
    public $port = 25565;

    public function index()
    {
        try{
            $Query = new MinecraftQuery( );
            $Query->Connect( $this->host, $this->port );
        }catch(MinecraftQueryException $e)
        {
            abort(404, 'cant contact server' . $e);
        }
        return $Query;
    }
}
