<?php

// Database
include('query.php');
$db = new Database($database,$tablesdb);

if(isset($_GET['order'])){
    $order = $_GET['order'];
}else{
    $order = $leaderboard['order_default'];
}
if(isset($_GET['limit'])){
    $limit = $_GET['limit'];
}else {
    $limit = $leaderboard['limit_default'];
}
if(isset($_GET['tables'])){
    $tables = $_GET['tables'];
}else{
    $tables = $tablesdb['StatsAPI'];
}

$i = 1;
$statsleaderboard = $db->readLeaderboard($tables,$order, $limit);

if(isset($_GET['username'])){
    $pname = $_GET['username'];
    $uuid = $db->giveUUID($pname);
    $stats = $db->readPlayerStats($uuid);
    $onServer = array_search($pname, $queryData);
    $check = $db->returnCheckOfflineOnlineStrings($onServer);

}elseif($_SESSION['username']){
    $pname = $_SESSION['username'];
    $uuid = $db->giveUUID($pname);
    $stats = $db->readPlayerStats($uuid);
    $onServer = array_search($pname, $queryData);
    $check = $db->returnCheckOfflineOnlineStrings($onServer);
}else{
    $pname = "dazzle";//fallback users
    $uuid = $db->giveUUID($pname);
    $stats = $db->readPlayerStats($uuid);
    $onServer = array_search($pname, $queryData);
    $check = $db->returnCheckOfflineOnlineStrings($onServer);
}



?>

