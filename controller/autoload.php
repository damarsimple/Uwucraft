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
    //find item icon replace space with underscore
    return strtolower(str_replace(" ", "_",$return));
}
function myException($exception) {
    if(DEVELEOPMENT){
        echo "<b>Exception:</b> " . $exception->getMessage();
    }else{
        echo "<b>Something Wrongs Please Contact Webadmin</b> ";
    }
    
}

set_exception_handler('myException');
session_start();

//AUTOLOAD MUST BE FIRST TO INCLUDED PLEASE




