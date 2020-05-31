
<?php

// namespace Database;

class Database{
    private $hostname;
    private $username;
    private $password;
    private $database;
    public $mysqli;

    public function __construct($hostname,$username,$password,$database){
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->mysqli = new mysqli($this->hostname,$this->username,$this->password,$this->database);
        $this->time = time() * 1000;
    }
    //FOR UUID
    public function giveUUID($crack, $username)
	{
		if($crack === True){
			return $this->offlinePlayerUuid($username);
		}else{
			return $this->mojangApi($username);
		}
    }
    public function createJavaUuid($striped) {
        //example: 069a79f4-44e9-4726-a5be-fca90e38aaf5
        $components = array(
        substr($striped, 0, 8),
        substr($striped, 8, 4),
        substr($striped, 12, 4),
        substr($striped, 16, 4),
        substr($striped, 20),
        );
        return implode('-', $components);
        }
    public function offlinePlayerUuid($username) {
        //extracted from the java code:
        //new GameProfile(UUID.nameUUIDFromBytes(("OfflinePlayer:" + name).getBytes(Charsets.UTF_8)), name));
        $data = hex2bin(md5("OfflinePlayer:" . $username));
        //set the version to 3 -> Name based md5 hash
        $data[6] = chr(ord($data[6]) & 0x0f | 0x30);
        //IETF variant
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        return $this->createJavaUuid(bin2hex($data));
        }
    public function mojangApi($username)
    {//uuid from mojang
        $json = file_get_contents("https://api.mojang.com/users/profiles/minecraft/$username");
        $mojang = json_decode($json);
        $uuid = $mojang->id;
        if(empty($uuid) === True){
        return null;
        }else{
        return $uuid;
        }
    }
    //END UUID
    //NEWS
    public function fetchNews(){
        return $this->mysqli->query("SELECT * FROM `news` ORDER BY `news`.`id` DESC LIMIT 10")->fetch_all(MYSQLI_ASSOC);
    }
    //END OF NEWS

    // IDK
    public function returnCheckOfflineOnlineStrings($session_islogged){
        if($session_islogged == 1){
            $a = "Online";
        }else{
            $a = "Offline";
        }
        return $a;
    }
    // public function deleteData
    public function readData($table,$columns,$uuid)
    {
        $data = $this->mysqli->query("SELECT * FROM $table WHERE uuid = '$uuid'")->fetch_all(MYSQLI_ASSOC);
        $result = $data[$columns];
        return $result;
    }
    public function updateData($table,$columns,$uuid,$value)
    {
        return $this->mysqli->query("UPDATE $table SET $columns='$value' WHERE UUID='$uuid'");
    }
    //STATSAPI
    public function readLeaderboard($tables,$order, $limit)
    {   //possible value Kills Deaths Wins Games

        return $this->mysqli->query("SELECT * FROM `statsapi` LEFT JOIN eco_accounts ON statsapi.UUID = eco_accounts.player_uuid ORDER BY `$tables`.`$order` DESC LIMIT $limit")->fetch_all(MYSQLI_ASSOC);
        //SELECT * FROM `statsapi` ORDER BY `statsapi`.`$order` DESC LIMIT $limit
    }
    public function readPlayerStats($UUID)
    {
        $result = $this->mysqli->query("SELECT * FROM users
        LEFT JOIN playersync_data ON users.UUID = playersync_data.UUID
        LEFT JOIN eco_accounts ON users.UUID = eco_accounts.player_uuid
        LEFT JOIN statsapi ON users.UUID = statsapi.UUID
        WHERE users.UUID = '$UUID'")->fetch_array(MYSQLI_ASSOC);
        unset($result['password']);// no password for you
        $rankKills = $this->mysqli->query("SELECT COUNT(*) FROM statsapi WHERE Kills >= (SELECT Kills FROM statsapi
        WHERE UUID = '$UUID');")->fetch_array(MYSQLI_NUM);
        $rankMoney = $this->mysqli->query("SELECT COUNT(*) FROM eco_accounts WHERE money >= (SELECT money FROM eco_accounts
        WHERE player_uuid = '$UUID');")->fetch_array(MYSQLI_NUM);
        $rank = ([
            "rank" => implode($rankKills),
            "rank_money" => implode($rankMoney),
            ]);
        $data = array_merge($result,$rank);
        return $data;
    }
    //END OF STATSAPI

    public function __destruct()
    {   //close conection to database
        $this->mysqli->mysqli_close;
    }
}
