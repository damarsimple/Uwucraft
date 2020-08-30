<?php

namespace App\GraphQL\Queries;

use App\Libraries\CheckRedis;

class REDISStatus
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return CheckRedis::info();
    }
}
