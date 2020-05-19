<?php

include('serverconfig.php');
$session = new Session($database_hosts, $database_user, $database_password, $database_name);


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
        //if usernames or email exists on databases
        if($session->playerExists($username,$email) == True){
            //input to database
            $session->RegisterPlayer($crack,$username,$email,$password_1);
            header('index.php');
        }else{
            echo "Username or Email Exists!";
        }
    }
}


session_start();