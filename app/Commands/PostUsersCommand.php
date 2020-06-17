<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Http;
use LaravelZero\Framework\Commands\Command;

class PostUsersCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'post:users 
                                {--name=},
                                {--email=}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Bellli bir kullanıcıyı ya da tüm kullanıcıları listeler';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->option('email');
        $email = $this->option('email');

        if ($email && $name) {
            // POST istedği yapılacak adres ve gönderilecek data
            $response = Http::post(SITE_URL . "users", [
                'name' => $name,
                'email' => $email,
            ]);
        } else {
            $this->error('mail adresini ve kullanıcı adını yazınız');
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
