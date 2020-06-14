<?php namespace Uwucraft\Model;

use mysqli;

class DatabaseModel{

    public $mysqli;
    public function __construct($db,$table)
    {
        $this->hostname = "localhost";
        $this->username = $db['user'];
        $this->password = $db['password'];
        $this->database = $db['name'];
        $this->port = $db['port'];
        $this->table = $table;
        $this->mysqli = new mysqli($this->hostname,$this->username,$this->password,$this->database,$this->port);
        $this->playerdata = $table['playerdata'];
        
        //Exception
        define ("DEVELEOPMENT", true);
        if(DEVELEOPMENT){
            try {
                if($this->mysqli->connect_errno == 1045){
                    throw new \Exception("CANT CONNECT TO DATABASE" . "<br>MYSQL : ". $this->mysqli->connect_error . '<br>'. " this usually due to user or password wrong");
                }elseif($this->mysqli->connect_errno){
                    throw new \Exception("CANT CONNECT TO DATABASE". "<br>MYSQL : ". $this->mysqli->connect_error . '<br>'. "Host or Database error");
                }
            }
            catch(\Exception $e) {
                echo 'EXCEPTION : ' .$e->getMessage() . '<br>';
            }
        }else{
            echo "Something Wrongs<br>";
        }
    }

    public function getPlayerData($UUID)
    {
        return $this->mysqli->query("SELECT * FROM `$this->playerdata` WHERE UUID = '$UUID'")->fetch_assoc();
    }
}