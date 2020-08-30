<?php

$dir = array_diff(scandir('./public/img/item/'), array('..', '.'));

$arr = array();
for ($i = 2; $i < count($dir); $i++) {
    $v = parse($dir[$i]);
    $v['id'] = $i;
    $v['stackSize'] = 64;
    array_push($arr, $v);
}
function parse(string $name)
{
    $name = str_replace(".png", "", $name);
    return [
        'displayName' => ucwords(str_replace("_", " ", $name)),
        'name' => $name,
    ];
};

//var_dump(json_encode($arr, JSON_PRETTY_PRINT));
file_put_contents('items.json', json_encode($arr, JSON_PRETTY_PRINT));
