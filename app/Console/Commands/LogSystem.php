<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\SystemActivityLog;
use App\Libraries\CheckMysql;
use App\Libraries\CheckRedis;
use App\Libraries\CheckSpigot;

class LogSystem extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'LogSystem:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate SystemActivity Log';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        SystemActivityLog::insert(CheckMysql::info());
        echo "Logged Mysql \n";
        SystemActivityLog::insert(CheckRedis::info());
        echo "Logged Redis \n";
        SystemActivityLog::insert(CheckSpigot::info());
        echo "Logged Spigot \n";
    }
}
