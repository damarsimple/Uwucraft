<?php
// // make a query conection to minecraft server
// // Minecraft Query By XPAW
// include('../model/MinecraftQuery.class.php');
// include('../model/MinecraftQueryException.class.php');

// use xPaw\MinecraftQuery;
// use xPaw\MinecraftQueryException;
// $Query = new MinecraftQuery( );
// // Query Execution Time too slow for some reason
// try
// {    // everything including query is making server slow // Posibly Timeout? /Fsock?
//     //Adding 10 SECONDS ! to execution time
//     $Query->Connect( $minecraftServer['hostname'], $minecraftServer['qport'] );
// }
// catch( MinecraftQueryException $e )
// {}
// Array for Query
$offlineMessage = [$language['Offline'], "Noice"];
$empty;
// if server offline
if(empty($empty)){
    $queryData['online'] = False;
    $queryData['servername'] = $language['Server_Currently_Offline'];
    $queryData['gametype'] = $language['Offline'];
    $queryData['version'] = $language['Offline'];
    $queryData['players'] = 0;
    $queryData['maxplayers'] = 0;
    $queryData['array_current_players'] = $offlineMessage;
    $queryData['version'] = $language['Offline'];
    $queryData['plugins'] = $language['Offline'];
    $queryData['software'] = $language['Offline'];
}else{
    $queryData = [
        "online" => True,
        "gametype" => $Query->GetInfo()['GameType'],//string
        "servername" => $Query->GetInfo()['HostName'],//string
        "version" => $Query->GetInfo()['Version'],//string
        "players" => $Query->GetInfo()['Players'],//int
        "map" => $Query->GetInfo()['Map'],//int
        "maxplayers" => $Query->GetInfo()['MaxPlayers'],//int
        "array_current_players" => $Query->GetPlayers(),//array
        "string_current_players" => implode('<br>', $Query->GetPlayers()),//convert to string i guess?
        "plugins" => $Query->GetInfo()['Plugins'],//Array
        "software" =>  $Query->GetInfo()['Software'],//String
    ];
}

?>
