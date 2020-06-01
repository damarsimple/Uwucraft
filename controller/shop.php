<?php
//Initialize database and buy function

// $buy = new Shop($minecraftServer['port'],$minecraftServer['passwordWebsender'],$minecraftServer['portWebsender']);
// everything including query is making server slow // Posibly Timeout? /Fsock? Timeout?
$buydb = new Shopdb($database,$tablesdb);
$totalQuantity = 0;
$totalPrice  = 0;

//Initialize Variable
$itemIndex = $buydb->itemsIndex();
$itemCounter = $buydb->itemsIndexCounter();
$UUID = $buydb->giveUUID($_SESSION['username']);
$cart = $buydb->seeCart($UUID);
//Condition

$_SESSION['cartcount'] = count($cart);
//Condition
if(isset($_GET['removeItem']))
{
    $item = $_GET['removeItem'];
    $buydb->removeCart($UUID,$item);
}
if(isset($_GET['clear']))
{
    $item = $_GET['clear'];
    $buydb->clearCart($UUID);
}
if(isset($_POST['cart'])){
    var_dump($_POST);
    $item = $_POST['item'];
    $amount = $_POST['amounts'];
    $buydb->addCart($_SESSION['username'],$item,$amount);
}

if(isset($_GET['item']))
{
    $productGet = $_GET['item'];
    $product = $buydb->itemWhere($productGet);
}else{
    $productGet = "Diamond"; //fallback
    $product = $buydb->itemWhere($productGet);
}
?>
