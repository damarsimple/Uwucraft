<?php

namespace App\GraphQL\Queries;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MYSQLStatus
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
        $status = true;
        $time = microtime(true);
        try {
            DB::connection()->getPdo();
            $time =   number_format(microtime(true) - $time, 5);
            return [
                'online' => $status,
                'ping' => $time,
                'updated_at' => Carbon::now()
            ];
        } catch (\Exception $e) {
            $status = false;
            return [
                'online' => $status,
                'ping' => $time,
                'exception' => $e,
                'updated_at' => Carbon::now()
            ];
        }
    }
}
