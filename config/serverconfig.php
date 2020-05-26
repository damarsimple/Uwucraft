<?php
// global config for server
// to store server variable like name or someshit likethat

$website = ([
    "title" => "Damar Server",
    "brand" => "https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg",
]);
//Global Config
$css = "placholder";
$cdn = "placholder";
$api = "placholder";
$test = "placholder";
//Languange refer to lang folder
$lang = "en"; //possible en,id
//Query /for player list etc

$server_ip = 'localhost';
$port = 25565;
//Mysql

$database_hosts = "localhost";
$database_user = "root";
$database_password = "123456";
$database_name = "minecraft";

//Websender API /for shop console etc

$websender_password = "123456789";
$websender_port = "19132";
// Offline Server?

$crack = True;

//Skinsrestorer
//Do you use Skinsrestorer?
$skinsrestorer = True;
//please refer to your skins api whether its mojang minotar or something else
if($skinsrestorer){
    $skins = ([
        "HEAD" => "http://framework.uwucraft.lan/users/skin/resources/server/skinRender.php?vr=0&hr=0&headOnly=true&ratio=4&user=",
        "SKINS" => "",
    ]);
}else{
    $skins = ([
        "HEAD" => "",
        "SKINS" => "",
    ]);
}
//More to come
//Periodic Update for money etc
$period_update = 1000; //1seconds
//Statsapi Leaderboard
$order_default = "Kills"; // Order / Kills / Deaths / Wins / Games / Placedblocks / Openchests
$limit_default = "10"; // Integer
$player_icon_size = 30;



?>