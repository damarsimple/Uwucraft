
<?php
session_start(); //this function needed to connect all session so you dont have to include everygoddamntime you have toa aknwjanbekn we
var_dump($_SESSION);
echo $_SESSION['username'];
session_destroy();

class BAWE{

    public function test(){
        echo "test";
        return "test";
    }
}
// page1.php


// echo 'Welcome to page #1';

// $_SESSION['username'] = 'green'; // thic function set variable for session can be used for anytihing array data type

// // Works if session cookie was accepted
// echo '<br /><a href="page2.php">page 2</a>';

// // Or maybe pass along the session id, if needed
// echo '<br /><a href="page2.php?' . SID . '">page 2</a>';

// echo $_SESSION['username'];//


//  // this function logout