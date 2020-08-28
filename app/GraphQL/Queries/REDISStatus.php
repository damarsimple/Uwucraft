<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\Redis;
use Carbon\Carbon;

class REDISStatus
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $time = microtime(true);
        $redis = Redis::connection();
        try {
            $time = number_format(microtime(true) - $time, 5);

            $status =  $redis->ping();
            return [
                'online' => $status,
                'ping' => $time,
                'updated_at' => Carbon::now()
            ];
        } catch (Exception $e) {
            return [
                'online' => $status,
                'ping' => $time,
                'exception' => $e->getMessage(),
                'updated_at' => Carbon::now()
            ];
        }
    }
}
