<?php

namespace App\Libraries;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CheckMysql
{

    public static function info()
    {
        $status = true;
        $time = microtime(true);
        try {
            DB::connection()->getPdo();
            $time =   number_format(microtime(true) - $time, 5);
            return [
                'type' => 'mysql',
                'online' => $status,
                'ping' => $time,
                'data' => sys_getloadavg()[0],
                'updated_at' => Carbon::now()
            ];
        } catch (\Exception $e) {
            $status = false;
            return [
                'type' => 'mysql',
                'online' => $status,
                'ping' => $time,
                'data' => sys_getloadavg()[0],
                'exception' => $e,
                'updated_at' => Carbon::now()
            ];
        }
    }
}
