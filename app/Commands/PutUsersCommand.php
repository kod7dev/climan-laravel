<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Storage;
use LaravelZero\Framework\Commands\Command;

class PutUsersCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'put:users 
                            {userid : mail addres},
                            {--name=}
                            {--email=}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        echo $this->argument('userid');
        echo "\n";
        echo $this->option('name');
        echo "\n";
        echo $this->option('email');
        echo "\n";
        /*
        $response = Http::post(SITE_URL . "users", [
            'name' => $this->option('name'),
            'email' => $this->option('email'),
        ]);
        */
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
