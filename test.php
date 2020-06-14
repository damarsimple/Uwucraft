<?php

use Uwucraft\Controller\Database;

require_once realpath('vendor/autoload.php');
header('Content-Type: application/json');

$b = new Database;
$arr = $b->return()->getPlayerData("c8cafbb7-c9f0-3bde-bd09-a96b45aed365")['inventory'];

function ParseInventory($str)
{
    //This Function Will Parse Item from database
    $first = strpos($str, "UNSPECIFIC");//Parse item tag //Bandaid Fix //Lore?
    $second = strpos($str, "}",$first);
    $arr = substr($str, 0,$first) . substr($str, $second+1);//Parsed
    //Clean String
    $arrC = str_replace("{", "",$arr);
    $arrC = str_replace(",", "",$arrC);
    $arrC = str_replace(" ", "",$arrC);
    //ToArray
    $firstArray = explode("}" ,$arrC);
    //Initialize Array
    $pushArray = array();
    $nameitem = array();
    $amountitem = array();
    for($i = 0;$i < count($firstArray);$i++)
    {
        $pushArray = explode("x", $firstArray[$i]);//Push Array
        @array_push($nameitem, $pushArray[0]);
        @array_push($amountitem, $pushArray[1]);
    }
    $nameitem = array_filter($nameitem);//Clean Array
    $amountitem = array_filter($amountitem);
    return ["inventory" => $nameitem,
            "amount" => $amountitem];
    //This Function use way too many variable bad for memory?

}

$data = [
    "b" => "dazzle",
    "s" => ParseInventory($arr),
];
echo json_encode($data);
?>