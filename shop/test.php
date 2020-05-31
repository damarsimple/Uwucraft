<?php
include '../controller/autoload.php';
include '../controller/stats.php';
// $item = "iron_ingot";
// var_dump($buydb->itemsIndex());
// echo "<br>";
// $img = itemicon($item);
// echo "<img src='$img'>";

// foreach($cart as $val){
//     $price = $buydb->getPrice($val['items_name']);
//     echo "<br>";
//     echo "the total for is : ".$val['items_name']."<strong>" ." : ". $price . "</strong>";
//     echo "<br>";
//     echo "total amounts for : " . $val['amounts'];
//     echo "<br>";
//     echo "the total for :".$val['items_name']." is : ".$val['amounts'] * $price;
//     echo "<br>";
//     $total_price += ($price*$val['amounts']);
// }
// echo "The Total Price is : "."<strong>" . $total_price . "</strong>";
// // foreach ($cart as $key => $value) {
// //     # code...
// //     echo $key['amounts'];
// // }

// for($i = 0; $i < 101; $i = $i + 1){
//     if($i % 3 === 0 && $i % 5 === 0){
//         echo "fizzbuzz " . $i;
//         echo "<br>";
//     }elseif($i % 3 === 0){
//         echo "fizz ". $i;
//         echo "<br>";
//     }
//     elseif($i % 5 === 0){
//         echo "buzz ". $i;
//         echo "<br>";
//     }else{
//         echo $i;
//         echo "<br>";
//     }
// }
// $i = 0;
// while($i < 7)
// {
//     $i++;
//     echo "test";
// }
// echo number_format(100, 3);



$result = $_SESSION['cartcount'];

var_dump($result);