<?php
/*
    Simple Migrating Scripts
*/
$db = mysqli_connect('localhost', 'root', '123456', 'uwucraft',3306);
$json = file_get_contents("https://raw.githubusercontent.com/PrismarineJS/minecraft-data/master/data/pc/1.8/items.json");
$decode = json_decode($json);

for($i = 0; $i < count($decode); $i++)
{
    $name = $decode[$i]->name;
    $displayname = $decode[$i]->displayName;
    $price = rand(100,1000) + rand(100,200);
    $id = $i;
    $description = "Item bearing name Of " .  $decode[$i]->displayName;
    $db->query("INSERT INTO `items_index` (`id`, `name`, `display_name`, `description`, `seller`, `minecraft_item_id`, `price`, `type`, `counter`) VALUES ('$id', '$name', '$displayname', '$description', 'Admin', 'minecraft:$name', '$price', 'misc', '0');");
    echo "Succes " . $displayname . "\n";
}

//To Run php test.php in terminal / cmd