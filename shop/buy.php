<?php

include '../config/autoload.php';
include '../config/shop.php';




//Initialize Variables
$players = "dazzle";
$item = "";
$amounts = "";
$time = time() * 1000;
$uuid = $buydb->giveUUID($crack, $players);
$ip = $_SERVER['REMOTE_ADDR'];
$price = "";
$b = True;
//Take Input
if($b = True){
    $item = "diamond";
    $amounts = "100";
    $price = $buydb->getPrice($item) * $amounts; //getPrice Functions to get price and get total price as well
    //run the buy functions
    //check if users has enough balance then run functions and check if users input 0 or nah
    if($buydb->detectPlayerBalanceEnough($buydb->detectPlayerBalance($uuid), $price) == True && $price != 0){
        //run thefunctions
        $buy->buyItem($players, $item, $amounts, $price);
        // Save to logs
        $buydb->savePlayerLogs($time, $players ,$uuid , $item, $amounts, $ip);
        echo "Payment Succes Price : $price";
    }else{
        // check user input / input cannot be 0 cuz it will give 64 instead lmao
        if($price == 0){
            echo "Enter Amounts !";
        }else{
            echo "You do not have enough balance !";
        }
    }



}
?>