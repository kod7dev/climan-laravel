<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Http;
use LaravelZero\Framework\Commands\Command;

class GetUsersCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'get:users
                            {userid=0}';
    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $userid = $this->argument('userid');

        if ($userid == '0') {
            // http://jsonplaceholder.typicode.com/users
            echo Http::get(SITE_URL . "users");
            echo "\n";
        } else {
            // http://jsonplaceholder.typicode.com/users/{userid}
            echo Http::get(SITE_URL . "users/" . $userid);
            echo "\n";
        }

        
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
