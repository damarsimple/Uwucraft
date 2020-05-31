<?php
include('database.class.php');
class Session extends Database{

    public function checkSession($index){
        if (isset($_SESSION['username'])){
            header("Location: $index.php");
            exit();
        }
    }
    public function checkOfflineOnServerBoolean($session_islogged){
        if($session_islogged === 1){
            $b = true;
        }else{
            $b= false;
        }
        return $b;
    }
    //this function handle registeration login and logout
    public function playerExists($username, $email){
        $result = $this->mysqli->query("SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1")->fetch_assoc();
        if (empty($result)){
            return False;
        }else{
            return True;
        }
    }
    public function RegisterPlayer($crack,$username,$email,$password)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $time = $this->time;
        $hash = password_hash($password,PASSWORD_BCRYPT);
    if($crack === True){
        $uuid = $this->offlinePlayerUuid($username);
        $_SESSION['username'] = $username;
        session_start();
        //long ass query lmao
        return $this->mysqli->query("INSERT INTO `users` (`id`, `username`, `realname`, `password`, `ip`, `lastlogin`, `x`, `y`, `z`, `world`, `regdate`, `regip`, `yaw`, `pitch`, `email`, `isLogged`, `hasSession`, `totp`, `UUID`)
        VALUES (NULL, '$username', '$username', '$hash', NULL, NULL, '0', '0', '0', 'world', '$time', '$ip', NULL, NULL, '$email', '0', '0', NULL, '$uuid');");
        }else{
        $uuid = $this->mojangApi($username);
        if(empty($uuid)){
        echo "YOUR ID DOES NOT EXISTS";
        return False;
        }else{
        $_SESSION['username'] = $username;
        session_start();
        //long ass query lmao
        return $this->mysqli->query("INSERT INTO `users` (`id`, `username`, `realname`, `password`, `ip`, `lastlogin`, `x`, `y`, `z`, `world`, `regdate`, `regip`, `yaw`, `pitch`, `email`, `isLogged`, `hasSession`, `totp`, `UUID`)
        VALUES (NULL, '$username', '$username', '$hash', NULL, NULL, '0', '0', '0', 'world', '$time', '$ip', NULL, NULL, '$email', '0', '0', NULL, '$uuid');");
            }
        }
    }
    public function loginPlayer($username, $password){
        $result = $this->mysqli->query("SELECT * FROM users WHERE username = '$username'");
        //check the password
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                if(password_verify($password, $row["password"]))
                {
                    session_start();
                    $_SESSION["username"] = $username;
                }
                else{
                    echo '<script>alert("Password Wrong")</script>';
                }
            }
        }else{
            echo '<script>alert("Username does not exists !")</script>';
            return "notexists";
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
        $userdata = $this->mysqli->query("SELECT * FROM users
        LEFT JOIN playersync_data ON users.UUID = playersync_data.UUID
        LEFT JOIN eco_accounts ON users.UUID = eco_accounts.player_uuid
        LEFT JOIN statsapi ON users.UUID = statsapi.UUID WHERE users.UUID = '$UUID' ")->fetch_array(MYSQLI_ASSOC);
        unset($userdata['password']); // no password for you
        $rankKills = $this->mysqli->query("SELECT COUNT(*) FROM statsapi WHERE Kills >= (SELECT Kills FROM statsapi
        WHERE UUID = '$UUID');")->fetch_array(MYSQLI_NUM);
        $rankMoney = $this->mysqli->query("SELECT COUNT(*) FROM eco_accounts WHERE money >= (SELECT money FROM eco_accounts
        WHERE player_uuid = '$UUID');")->fetch_array(MYSQLI_NUM);
        //ARRAY to store rank and rank money data thank you random answerer on bukkit forum
        $rank = ([
            "rank" => implode($rankKills),
            "rank_money" => implode($rankMoney),
            ]);
        $data = array_merge($userdata, $rank);
        return $data;
    }
    public function test(){
        return $this->mysqli->query("SELECT Kills, rank() over (order by Kills DESC) AS rank from statsapi WHERE statsapi.UUID = 'c8cafbb7-c9f0-3bde-bd09-a96b45aed365'")->fetch_all();
    }
    //end session data
}
?>



