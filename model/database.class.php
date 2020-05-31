
<?php

// namespace Database;

class Database{
private $database;
public $mysqli;
public $tablesdb;

    public function __construct($database,array $tablesdb){
        //START DATABASE
        $this->hostname = $database['hostname'];
        $this->username = $database['user'];
        $this->password = $database['password'];
        $this->database = $database['name'];
        $this->port = $database['port'];
        $this->mysqli = new mysqli($this->hostname,$this->username,$this->password,$this->database,$this->port);
        //END OF DATABASE SECTIONS
        //START TABLES SECTIONS
        $this->tablesdb = $tablesdb;
        $this->Hash = $tablesdb['Hash'];
        $this->AdvancedBan = $tablesdb['AdvancedBan'];
        $this->AuthMe = $tablesdb['AuthMe'];
        $this->MysqlEcoBridge = $tablesdb['MysqlEcoBridge'];
        $this->MysqlExperienceBridge = $tablesdb['MysqlExperienceBridge'];
        $this->MysqlInventoryBridge = $tablesdb['MysqlInventoryBridge'];
        $this->PlayerSync = $tablesdb['PlayerSync'];
        $this->SkinsRestorerSkin = $tablesdb['SkinsRestorerSkin'];
        $this->SkinsRestorerPlayer = $tablesdb['SkinsRestorerPlayer'];
        $this->StatsAPI = $tablesdb['StatsAPI'];
        $this->SuperTrails = $tablesdb['SuperTrails'];
        $this->News = $tablesdb['News'];
        $this->ItemsIndex = $tablesdb['ItemsIndex'];
        $this->Limit = $tablesdb['Limit'];
        $this->Items_Cart = $tablesdb['Items_Cart'];
        $this->TransactionHistory = $tablesdb['TransactionHistory'];
        //END OF TABLES SECTIONS
        //MISC
        $this->time = time() * 1000;
        $this->offlineMode = $tablesdb['offlineMode'];
        //START EXCEPTIONS
        if(DEVELEOPMENT){
            try {
                if($this->mysqli->connect_errno == 1045){
                    throw new Exception("CANT CONNECT TO DATABASE" . "<br>MYSQL : ". $this->mysqli->connect_error . '<br>'. " this usually due to user or password wrong");
                }elseif($this->mysqli->connect_errno){
                    throw new Exception("CANT CONNECT TO DATABASE". "<br>MYSQL : ". $this->mysqli->connect_error . '<br>'. "Host or Database error");
                }
                if($this->tablesdb == null){
                    throw new Exception("TABLES DIDNT SPECIFIED");
                }
            }
            catch(Exception $e) {
                echo 'EXCEPTION : ' .$e->getMessage() . '<br>';
            }
        }else{
            echo "Something Wrongs<br>";
        }

        //END
    }
    //FOR UUID
    public function giveUUID($username)
	{
		if($this->offlineMode == True){
			return $this->offlinePlayerUuid($username);
		}else{
                if($this->mojangApi($username) == null){
                    return 404;//notfound
                }else{
                    return $this->mojangApi($username);
                }
		}
    }
    private function createJavaUuid($striped) {
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
    private function offlinePlayerUuid($username) {
        //extracted from the java code:
        //new GameProfile(UUID.nameUUIDFromBytes(("OfflinePlayer:" + name).getBytes(Charsets.UTF_8)), name));
        $data = hex2bin(md5("OfflinePlayer:" . $username));
        //set the version to 3 -> Name based md5 hash
        $data[6] = chr(ord($data[6]) & 0x0f | 0x30);
        //IETF variant
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        return $this->createJavaUuid(bin2hex($data));
        }
    private function mojangApi($username)
    {//uuid from mojang links if you have better way please tell me lmao
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
    public function fetchNews($limit){
        return $this->mysqli->query("SELECT * FROM `$this->News` ORDER BY `$this->News`.`id` DESC LIMIT $limit")->fetch_all(MYSQLI_ASSOC);
    }
    //END OF NEWS

    // IDK
    public function returnCheckOfflineOnlineStrings($session_islogged){
        if($session_islogged == True){
            $a = "Online";
        }else{
            $a = "Offline";
        }
        return $a;
    }
    public function checkOfflineOnServerBoolean($username){
        $check = $this->mysqli->query("SELECT * FROM $this->AuthMe WHERE username='$username'")->fetch_assoc();
        if($check['isLogged'] == "1"){
            $b = True;
        }else{
            $b= False ;//False
        }
        return $b;
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
        return $this->mysqli->query("SELECT * FROM `$this->StatsAPI` LEFT JOIN $this->MysqlEcoBridge ON $this->StatsAPI.UUID = $this->MysqlEcoBridge.player_uuid ORDER BY `$tables`.`$order` DESC LIMIT $limit")->fetch_all(MYSQLI_ASSOC);
    }
    public function readPlayerStats($UUID)
    {
        $result = $this->mysqli->query("SELECT * FROM $this->AuthMe
        LEFT JOIN $this->PlayerSync ON $this->AuthMe.UUID = $this->PlayerSync.uuid
        LEFT JOIN $this->MysqlEcoBridge ON $this->AuthMe.UUID = $this->MysqlEcoBridge.player_uuid
        LEFT JOIN $this->StatsAPI ON $this->AuthMe.UUID = $this->StatsAPI.UUID
        WHERE $this->AuthMe.UUID = '$UUID'")->fetch_array(MYSQLI_ASSOC);
        unset($result['email']);// no sensitive data for you
        unset($result['password']);// no sensitive data for you
        unset($result['UUID']);// no sensitive data for you
        unset($result['uuid']);// no sensitive data for you
        unset($result['x']);// no sensitive data for you
        unset($result['y']);// no sensitive data for you
        unset($result['z']);// no sensitive data for you
        unset($result['regdate']);// no sensitive data for you
        unset($result['regip']);// no sensitive data for you
        unset($result['ip']);// no sensitive data for you
        $rankKills = $this->mysqli->query("SELECT COUNT(*) FROM  $this->StatsAPI WHERE Kills >= (SELECT Kills FROM  $this->StatsAPI
        WHERE UUID = '$UUID');")->fetch_array(MYSQLI_NUM);
        $rankMoney = $this->mysqli->query("SELECT COUNT(*) FROM $this->MysqlEcoBridge WHERE money >= (SELECT money FROM $this->MysqlEcoBridge
        WHERE player_uuid = '$UUID');")->fetch_array(MYSQLI_NUM);
        $rank = [
            "rank" => implode($rankKills),
            "rank_money" => implode($rankMoney),
            ];
        $data = array_merge($result,$rank);
        return $data;
    }
    //END OF STATSAPI

    public function __destruct()
    {
        mysqli_close($this->mysqli);
    }
}
