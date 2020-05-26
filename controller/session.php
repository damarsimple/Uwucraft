<?php
$session = new Session($database_hosts, $database_user, $database_password, $database_name);
$error = array(); //to send error message

// REGISTER USER
if (isset($_POST['register'])) {
    // receive all input values from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    //basic validation
    if($password_1 != $password_2){
        echo "Password Different";
    }else{
        if($session->playerExists($username,$email) == False){//if not exists then register
            //input to database
            $session->RegisterPlayer($crack,$username,$email,$password_1);
            header('index.php');
        //if usernames or email exists on databases
        }elseif($session->playerExists($username,$email) == True){
            array_push($error, "Username or Email Exists !");
        }else{
            //unexpected
            array_push($error, "Something wrong");
        }
    }
}
//LOGIN USER
if (isset($_POST['login'])){
    //
    $username = $_POST['username'];
    $password = $_POST['password'];

    $session->loginPlayer($username, $password);
}
// LOGOUT USER
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../index.php");
}

//reminder since exp is float it needed to turn into int float/1 * 100 then intval() is the formula
$UUID = $session->offlinePlayerUuid($_SESSION['username']);
$sessionData = $session->sessionData($UUID);
$news = $session->fetchNews();


