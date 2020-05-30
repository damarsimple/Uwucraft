<?php

$session = new Session($database,$tablesdb);
$error = ""; //to send error message

// REGISTER USER
if (isset($_POST['register'])) {
    // receive all input values from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    //basic validation
    if($password_1 != $password_2){
    $error = $language['Password_Different'];
    }else{
        if($session->playerExists($username,$email) == False){//if not exists then register
            //input to database
            if($session->RegisterPlayer($username,$email,$password_1))
            {
                header('index.php');
            }else{
                //cant contact mojang api or uuid does not exists
                $error = $language['UUID_Not_Exists'];
            }
        //if usernames or email exists on databases
        }elseif($session->playerExists($username,$email) == True){
            $error = $language['Username_Email_Exists'];
        }else{
            //unexpected
            $error = $language['Unexpected'];
        }
    }
}
//LOGIN USER
if (isset($_POST['login'])){
    //
    $username = $_POST['username'];
    $password = $_POST['password'];
    //403 Wrong Password //404 Username Does Not Exists
    switch($session->loginPlayer($username, $password))
    {
        case '403':
        $error = $language['Wrong_Password'];
        break;
        case '404':
        $error = $language['User_Not_Exist'];
        break;
        default:
        $error = $language['Unexpected'];
        break;
    }
}
// LOGOUT USER
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: ../index.php");
}

//reminder since exp is float it needed to turn into int float/1 * 100 then intval() is the formula
if(isset($_SESSION['username'])){
$UUID = $session->giveUUID($_SESSION['username']);
$sessionData = $session->sessionData($UUID);
$news = $session->fetchNews(5);
$check = $session->returnCheckOfflineOnlineStrings(True);
}else{
    $_SESSION['username'] = null;
}

// $onServer = array_search($_SESSION['username'], $queryData['array_current_players']);
// $check = $session->returnCheckOfflineOnlineStrings($onServer);