<?php

namespace App\GraphQL\Queries;

use App\User;
use App\Item;

class Search
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // $user = User::search($args['search'])->get();
        // $userData = json_encode($user->toArray());
        // $resultUser = [
        //     'type' => 'User',
        //     'data' =>  $userData,
        // ];
        $item = Item::search($args['search'])->get();
        // $itemData = json_encode($item->toArray());
        // $resultItem = [
        //     'type' => 'Item',
        //     'data' =>  $itemData,
        // ];
        return $item;
    }
}
