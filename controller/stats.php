<?php

$db = new Database($database_hosts, $database_user, $database_password, $database_name);

if(isset($_GET['order'])){
    $order = $_GET['order'];
}else{
    $order = $order_default;
}
if(isset($_GET['limit'])){
    $limit = $_GET['limit'];
}else {
    $limit = $limit_default;
}
if(isset($_GET['tables'])){
    $tables = $_GET['tables'];
}else{
    $tables = "statsapi";
}
$statsleaderboard = $db->readLeaderboard($tables,$order, $limit);
$i = 1;

if(isset($_GET['username'])){
    $pname = $_GET['username'];
    $uuid = $db->giveUUID($crack, $pname);
    $stats = $db->readPlayerStats($uuid);
}elseif($_SESSION['username']){
    $pname = $_SESSION['username'];
    $uuid = $db->giveUUID($crack, $pname);
    $stats = $db->readPlayerStats($uuid);
}else{
    $pname = "Please Input Username";
}



?>

