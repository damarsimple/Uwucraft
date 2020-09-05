<?php

namespace App\GraphQL\Queries;

use App\Libraries\CheckSpigot;
use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;
use Carbon\Carbon;

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
