<?php
include('database.class.php');
class Session extends Database{

    public function checkSession($index){
        if (isset($_SESSION['username'])){
            header("Location: $index.php");
            exit();
        }
    }
    //this function handle registeration login and logout
    public function playerExists($username, $email){
        $result = $this->mysqli->query("SELECT * FROM $this->AuthMe WHERE username='$username' OR email='$email' LIMIT 1")->fetch_assoc();
        if (empty($result)){
            return False;
        }else{
            return True;
        }
    }
    public function RegisterPlayer($username,$email,$password)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $time = $this->time;
        $hash = password_hash($password,$this->hash);
        $uuid = $this->giveUUID($username);
        if($uuid == 404)
        {
        return False;
        }else
        {
            $_SESSION['username'] = $username;
            session_start();
            //long ass query lmao
            $this->mysqli->query("INSERT INTO `$this->AuthMe` (`id`, `username`, `realname`, `password`, `ip`, `lastlogin`, `x`, `y`, `z`, `world`, `regdate`, `regip`, `yaw`, `pitch`, `email`, `isLogged`, `hasSession`, `totp`, `UUID`)
            VALUES (NULL, '$username', '$username', '$hash', NULL, NULL, '0', '0', '0', 'world', '$time', '$ip', NULL, NULL, '$email', '0', '0', NULL, '$uuid');");
            return True;
        }

    }
    public function loginPlayer($username, $password){
        $result = $this->mysqli->query("SELECT * FROM $this->AuthMe WHERE username = '$username'");
        //check the password
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                if(password_verify($password, $row["password"]))
                {
                    session_start();
                    $_SESSION["username"] = $username;
                    $_SESSION["data"] = array_merge($_SESSION, $this->sessionData($this->giveUUID($username)));
                    return 0;
                }
                else{
                    return 403;
                }
            }
        }else{
            return 404;
        }
    }
    public function logoutPlayer(){
        unset($_SESSION);
        session_destroy();
    }
    //end of sections
    //start session data
    public function sessionData($UUID)
    {
        $userdata = $this->mysqli->query("SELECT * FROM $this->AuthMe
        LEFT JOIN $this->PlayerSync ON $this->AuthMe.UUID = $this->PlayerSync.UUID
        LEFT JOIN $this->MysqlEcoBridge ON $this->AuthMe.UUID = $this->MysqlEcoBridge.player_uuid
        LEFT JOIN $this->StatsAPI ON $this->AuthMe.UUID = $this->StatsAPI.UUID WHERE $this->AuthMe.UUID = '$UUID' ")->fetch_array(MYSQLI_ASSOC);
        unset($userdata['password']); // no password for you
        $rankKills = $this->mysqli->query("SELECT COUNT(*) FROM $this->StatsAPI WHERE Kills >= (SELECT Kills FROM $this->StatsAPI
        WHERE UUID = '$UUID');")->fetch_array(MYSQLI_NUM);
        $rankMoney = $this->mysqli->query("SELECT COUNT(*) FROM $this->MysqlEcoBridge WHERE money >= (SELECT money FROM $this->MysqlEcoBridge
        WHERE player_uuid = '$UUID');")->fetch_array(MYSQLI_NUM);
        //ARRAY to store rank and rank money data thank you random answerer on bukkit forum
        $rank = [
            "rank" => implode($rankKills),
            "rank_money" => implode($rankMoney),
            ];
        $data = array_merge($userdata, $rank);
        return $data;
    }
    //end session data
}
?>



