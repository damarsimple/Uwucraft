<?php

spl_autoload_register("Autoloader");

function Autoloader($className){
    $path = "../class/";
    $ext = ".class.php";
    $fullpath = $path . $className . $ext;
    include $fullpath;
}


