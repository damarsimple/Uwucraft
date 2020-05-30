<?php

include '../controller/autoload.php';
include '../controller/shop.php';


$players = "dazzle";
$b = $buydb->giveUUID($players);

$balance = $buydb->detectPlayerBalance($b);
$bet = 110200;
echo "<h1>$balance</h1><br>";
$e = rand(1,10);
if($e >= 5){
    echo $e . "<br>";
    echo "you win";
    $win = $balance + $bet;
    echo "<br>";
    echo $win;
}else{
    echo $e . "<br>";
    echo "you lose";
    $lose = $balance - $bet;
    echo "<br>";
    echo $lose;
}


