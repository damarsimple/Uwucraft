<?php
// global config for server
// to store server variable like name or anything else likethat
$times = microtime(true); //for execution times lookup
//Global Config
$website = [
    "title" => "UWUCRAFT",
    "icon" => "../favicon.png",
    "brand" => "../favicon.png",
    "sessionNames" => "DOGESESSION",//UPPERCASE
];

$settings = [
    "lang" => "en",//Languange refer to lang folder
    "serviceFee" => 2,//In percent
    "Tax" => 2,//In Percent
    "DEVELEOPMENT" => True, //Develeopment give more detailed info in crash / set to true if you want more info /set to false tohide info
];
$cdn = "placholder";
$api = "placholder";
$test = "placholder";


//For Query and Websender
$minecraftServer =[
    //Offline Server?
    "offlineMode" => True,
    "hostname" => "localhost", //IP
    "port" => "25565",
    "qport" => "25565", //Query Port
    "portWebsender" => "19132",
    "passwordWebsender" => "123456789",
];

//Mysql Database Conection
$database = [
    "hostname" => "localhost",
    "user" => "root",
    "password" => "123456",
    "name" => "minecraft",
    "port" => "3306",
];

//MYSQL TABLES NAME
$tablesdb = [
    //Please Change the hashing Algorith AuthMe used to BCRYPT Instead of SHA256
    // if you doesnt want to, then change below to hash algorithm that php use//
    // For now i cant find how to use SHA256 on php so dont change it unless you use CRYPT Hashing
    "Hash" => "PASSWORD_BCRYPT",
    "offlineMode" => True, //Are you Offline Server?
    //Minecraft Sections
    //Plugins name then tables name
    //Some Plugins does not allow change tables name but some plugins does /* hopefully i can write my own plugins so this doesnt become problem */
    //Please ADD UUID Column to AuthMe(Disabled By Default) <! VERY IMPORTANT !>
    "AdvancedBan" => "punishments",
    "AuthMe" => "users",
    "MysqlEcoBridge" => "eco_accounts",
    "MysqlExperienceBridge" => "meb_experience",
    "MysqlInventoryBridge" => "meb_inventory",
    "PlayerSync" => "playersync_data",
    "SkinsRestorerSkin" => "Skins",
    "Limit" => 10,//Int for limit query
    "SkinsRestorerPlayer" => "Players",
    "StatsAPI" => "statsapi",
    "SuperTrails" => "supertrails",
    //Website Sections
    "News" => "news",
    "ItemsIndex" => "items_index",
    "Items_Cart" => "items_cart",
    "TransactionHistory" => "transaction_history",
];
//Skinsrestorer
//Do you use Skinsrestorer?
$skinsrestorer = True;
//if not please add to else blocks your skins API e.g Minotar
if($skinsrestorer){
    //used for leaderboard and many more
    $skins = [
        //your links to skinrender.php with heads only options e.g http://yoursite/skinsrestorerfolder/skin/resources/server/skinRender.php?vr=0&hr=0&headOnly=true&ratio=4&user=
        //My recomendation is skinRender.php?vr=0&hr=0&headOnly=true&ratio=4&user= //show only head
        "HEAD" => "http://framework.uwucraft.lan/users/skin/resources/server/skinRender.php?vr=0&hr=0&headOnly=true&ratio=4&user=",
        "SKINS" => "",
    ];
}else{
    $skins = [
        //input your skins api e.g minotar.net
        "HEAD" => "../img/users/",
        "SKINS" => "",
    ];
}

//More to come
//Periodic Update for money etc
$period_update = 1000; //1seconds
//Statsapi Leaderboard
$leaderboard = [
    //leaderboard configuration default
    "order_default" => "Kills", //Kills, Deaths, Wins, Money
    "limit_default" => "10",
];


//Please Dont Change

define('DEVELEOPMENT', $settings['DEVELEOPMENT']);
$lang = $settings['lang'];

?>