<?php namespace Uwucraft\Controller;

use Uwucraft\Model\DatabaseModel as Databasemodel;

class Database{

    public function __construct()
    {
        $this->db = [
                "hostname " => "localhost",
                "user" => "root",
                "password" => "123456",
                "name" => "uwucraft",
                "port" => "3306"
            ];
        $this->table = ["playerdata" => "mc_playerdata"];
    }
    public function return()
    {
        return $this->b = new DatabaseModel($this->db,$this->table);
    }
}