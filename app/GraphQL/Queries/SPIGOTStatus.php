<?php

namespace App\GraphQL\Queries;

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

        $time = microtime(true);
        $status = false;

        try {
            $Query = new MinecraftPing('pixel.mc-complex.com', 25565);
            $time = number_format(microtime(true) - $time, 5);
            $status =  true;
            return [
                'online' => $status,
                'ping' => $time,
                'updated_at' => Carbon::now()
            ];

            //$Query->Query();
            //$Query->GetPlayers();
        } catch (MinecraftPingException $e) {
            return [
                'online' => $status,
                'ping' => $time,
                'exception' => $e->getMessage(),
                'updated_at' => Carbon::now()
            ];
        }
    }
}
