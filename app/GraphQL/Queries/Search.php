<?php

namespace App\GraphQL\Queries;

use App\Item;
use App\UserData;

class Search
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $data = array();
        $item = Item::search($args['search'])->get()->toArray();
        $user = UserData::search($args['search'])->get()->toArray();
        foreach ($user as $val) {
            $de = [
                'name' => $val['user_id'],
                'action' => $val['user_id'],
                'img' => $val['user_id'],
                'type' => 'User',
                'data' => json_encode($val),
            ];
            array_push($data, $de);
        }
        foreach ($item as $val) {
            $de = [
                'name' => $val['item_name'],
                'action' => $val['id'],
                'img' => $val['minecraft_item_shorthand'],
                'type' => 'Item',
                'data' => json_encode($val),
            ];
            array_push($data, $de);
        }
        return  $data;
    }
}
