<?php
spl_autoload_register("Autoloader");
include('../config/serverconfig.php');
include("../lang/$lang.lang.php");
function Autoloader($className){
    $path = "../model/";
    $ext = ".class.php";
    $fullpath = $path . $className . $ext;
    include $fullpath;
}
function itemicon($item){
    $path = "../img/textures/item/$item";
    $ext = ".png";
    $return = $path . $ext;
    return $return;
}
session_start();
//AUTOLOAD MUST BE FIRST TO INCLUDED PLEASE




