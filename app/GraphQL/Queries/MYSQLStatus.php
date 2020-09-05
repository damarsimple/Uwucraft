<?php

namespace App\GraphQL\Queries;

use App\Libraries\CheckMysql;


class MYSQLStatus
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        return CheckMysql::info();
    }
}
