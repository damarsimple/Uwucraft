<?php

namespace App\Libraries;


use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;
use Carbon\Carbon;

class CheckSpigot
{

    public static function info()
    {
        $time = microtime(true);
        $status = false;

        try {
            $Query = new MinecraftPing('pixel.mc-complex.com', 25565);
            $time = number_format(microtime(true) - $time, 5);
            $status =  true;
            return [
                'type' => 'spigot',
                'online' => $status,
                'ping' => $time,
                'updated_at' => Carbon::now()
            ];

            //$Query->Query();
            //$Query->GetPlayers();
        } catch (MinecraftPingException $e) {
            return [
                'type' => 'spigot',
                'online' => $status,
                'ping' => $time,
                'exception' => $e->getMessage(),
                'updated_at' => Carbon::now()
            ];
        }
    }
}
