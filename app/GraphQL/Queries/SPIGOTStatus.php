<?php

namespace App\GraphQL\Queries;

use App\Libraries\CheckSpigot;

class SPIGOTStatus
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return CheckSpigot::info();
    }
}
