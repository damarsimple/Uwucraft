<?php
include '../controller/autoload.php';
include '../controller/shop.php';
$item = "iron_ingot";
var_dump($buydb->itemsIndex());
echo "<br>";
$img = itemicon($item);
echo "<img src='$img'>";