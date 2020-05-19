<?php
//make a query conection to minecraft server
//Minecraft Query By XPAW
include('serverconfig.php');
require __DIR__ . '/MinecraftQuery.php'; // include minecraft query library
require __DIR__ . '/MinecraftQueryException.php';

use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;
$Query = new MinecraftQuery( );
try
{
    $Query->Connect( $server_ip, $port );
}
catch( MinecraftQueryException $e )
{}

?>