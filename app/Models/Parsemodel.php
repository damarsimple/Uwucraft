<?php namespace App\Models;

use CodeIgniter\Model;

class Parsemodel extends Model
{
    public function parseItem(string $str)
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
        return ["item" => $nameitem,
                "amount"    => $amountitem];
        //This Function use way too many variable bad for memory?
    }

    public function parseItemSmall($str)
    {
        
    }
}