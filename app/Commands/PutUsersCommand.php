<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use LaravelZero\Framework\Commands\Command;

use function GuzzleHttp\json_decode;

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
    protected $description = 'Kullanıcı bilgilerini günceller';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $userid = $this->argument('userid');

        $user = (Http::get(SITE_URL . "users/" . $userid));

        if ($user == '{"error":true,"msg":"Belirtilen id de user bulunamadı"}') {
            echo $user . "\n";
        } else {
            $json = json_decode($user->__toString());

            echo "Varsayılan değerde kalması için boş bırakınız.\n";
            $name = $this->ask('name', $json->name);
            $email = $this->ask('email', $json->email);

            $response = Http::put(SITE_URL . "users/" . $userid, [
                'name' => $name,
                'email' => $email,
            ]);

            echo $response;
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
