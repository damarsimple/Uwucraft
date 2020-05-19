<?php
include('database.class.php');
class Session extends Database{
    public function checkSession(){
        if (isset($_SESSION['username'])){
            header("Location: index.php");
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

    public function returnCheckOfflineOnlineStrings($session_islogged){
        if($session_islogged == 1){
            $a = "Online";
        }else{
            $a = "Offline";
        }
        return $a;
    }
    public function playerExists($username, $email){
        $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
        $result_e = mysqli_query($this->mysqli, $user_check_query);
        $result_u = mysqli_query($this->mysqli, $user_check_query);
        if (mysqli_num_rows($result_u) > 0 && mysqli_num_rows($result_e) > 0) {
            return False;
        }else{
            return True;
        }
    }
    public function RegisterPlayer($crack,$username,$email,$password)
    {
    if($crack === True){
        $hash = password_hash($password,PASSWORD_BCRYPT);
        $uuid = $this->offlinePlayerUuid($username);
        $time = time() * 1000;
        $ip = $_SERVER['REMOTE_ADDR'];
        //long ass query lmao
        $query = "INSERT INTO `users` (`id`, `username`, `realname`, `password`, `ip`, `lastlogin`, `x`, `y`, `z`, `world`, `regdate`, `regip`, `yaw`, `pitch`, `email`, `isLogged`, `hasSession`, `totp`, `UUID`)
        VALUES (NULL, '$username', '$username', '$hash', NULL, NULL, '0', '0', '0', 'world', '$time', '$ip', NULL, NULL, '$email', '0', '0', NULL, '$uuid');";
        $_SESSION['username'] = $username;
        session_start();
        return mysqli_query($this->mysqli, $query);
        }else{
        $hash = password_hash($password,PASSWORD_BCRYPT);
        $uuid = $this->mojangApi($username);
        $time = time() * 1000;
        $ip = $_SERVER['REMOTE_ADDR'];
        if(empty($uuid)){
        echo "YOUR ID DOES NOT EXISTS";
        }else{
        //long ass query lmao
        $query = "INSERT INTO `users` (`id`, `username`, `realname`, `password`, `ip`, `lastlogin`, `x`, `y`, `z`, `world`, `regdate`, `regip`, `yaw`, `pitch`, `email`, `isLogged`, `hasSession`, `totp`, `UUID`)
                VALUES (NULL, '$username', '$username', '$hash', NULL, NULL, '0', '0', '0', 'world', '$time', '$ip', NULL, NULL, '$email', '0', '0', NULL, '$uuid');";
                $_SESSION['username'] = $username;
        session_start();
        return mysqli_query($this->mysqli, $query);
            }
        }
    }
    public function loginPlayer($username, $password){
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result		= mysqli_query($this->mysqli, $query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                if(password_verify($password, $row["password"]))
                {
                    session_start();
                    $_SESSION["username"] = $username;
                }
                else{
                    echo '<script>alert("Wrong User Details")</script>';
                }
            }
        }else{
            return "notexists";
        }
    }
    public function logoutPlayer(){
        unset($_SESSION);
        session_destroy();
    }
}

// $buydb = new Session('localhost', 'root', '123456', 'minecraft');

// echo $buydb->loginPlayer("dazzle", 123456);

// $buydb->logoutPlayer();

?>



