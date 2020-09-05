<?php

namespace App\GraphQL\Queries;

class Auth
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        var_dump($args);
    }
}
