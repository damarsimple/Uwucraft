<?php
//make a query conection to minecraft server
//Minecraft Query By XPAW
include('../model/MinecraftQuery.class.php');
include('../model/MinecraftQueryException.class.php');
use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;
$Query = new MinecraftQuery( );
try
{
    $Query->Connect( $server_ip, $port );
}
catch( MinecraftQueryException $e )
{}
// Variable for query
$gametype = $Query->GetInfo()['GameType'];//string
$servername = $Query->GetInfo()['HostName'];//string
$version = $Query->GetInfo()['Version'];//string
$map = $Query->GetInfo()['Map'];//string
$players = $Query->GetInfo()['Players'];//int
$maxplayers = $Query->GetInfo()['MaxPlayers'];//int
$array_current_players =  $Query->GetPlayers();
$string_current_players = implode('<br>', $Query->GetPlayers()); //convert to string i guess?
$plugins = $Query->GetInfo()['Plugins'];//Array
$software = $Query->GetInfo()['Software'];//String
$i = 1;
$status = True; //variable for if functions
$currentplayers == True; //variable for if functions
//Handle Exceptions
//set all variable to server offline incase server offline
if($servername == null){
    $gametype = $servername = $version = $map = $string_current_players = $plugins = $software = "Server Offline";
    $players = $maxplayers = "0";
    $array_current_players = ['Server Offline'];
    $i = 0;
    $status = False;
    $motd = "Server Offline";
}
// give message incase no one in server
if($array_current_players == False){
    $currentplayers = False;
    $status = False;
    $string_current_players = "No Players Online"; //message
    $array_current_players = ['No Players Online'];//message
}


?>