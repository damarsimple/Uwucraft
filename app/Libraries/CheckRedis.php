<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Redis;
use Carbon\Carbon;

class CheckRedis
{

    public static function info()
    {
        $time = microtime(true);
        $redis = Redis::connection();
        try {
            $time = number_format(microtime(true) - $time, 5);

            $status =  $redis->ping();
            return [
                'type' => 'redis',
                'online' => $status,
                'ping' => $time,
                'updated_at' => Carbon::now()
            ];
        } catch (Exception $e) {
            return [
                'type' => 'redis',
                'online' => $status,
                'ping' => $time,
                'exception' => $e->getMessage(),
                'updated_at' => Carbon::now()
            ];
        }
    }
}
