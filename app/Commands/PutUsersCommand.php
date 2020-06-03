<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Http;
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

        $userid = $this->argument('userid');
        $name = $this->option('name');
        $email = $this->option('email');

        if ($email && $name) {
            // Güncellenecek user ve gönderilecek data
            $response = Http::put(SITE_URL . "users/" . $userid, [
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
