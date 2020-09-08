<?php

namespace App\GraphQL\Queries;

use App\ChatMessage;

class Chatquery
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return ChatMessage::where([
            ['from_id', '=', $args['from']],
            ['to_id', '=', $args['to']],
        ])->orWhere([
            ['from_id', '=', $args['to']],
            ['to_id', '=',  $args['from']],
        ])->get();
        // return "Hello, {$args['name']}!";
    }
}
