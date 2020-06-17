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
                            {--postid=0 : İstenilen post\'un id\'si},
                            {--posts : İstenilen post\'un id\'si},
                            {userid=0 : Kullanıcı id\'si. 0 Tüm kullanıcılar demek}';
    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Bellli bir kullanıcıyı ya da tüm kullanıcılarıb bilgilerini listeler';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $userid = $this->argument('userid');
        $postid = $this->option('postid');
        $posts  = $this->option('posts');


        // id si belirtilen kullanıcının id si belirtilen post u
        if ($userid != '0' && $postid != '0') {
            echo Http::get(SITE_URL . "users/" . $userid . "/posts/" . $postid) . "\n";
        }
        // id si belirtilen kullanıcının tüm post ları
        elseif ($userid != '0' && $posts) {
            echo Http::get(SITE_URL . "users/" . $userid . "/posts") . "\n";
        }
        // id si belirtilen kullanıcının bilgileri
        elseif ($userid != '0') {
            echo Http::get(SITE_URL . "users/" . $userid) . "\n";
        }
        // tüm kullanıcılar
        elseif ($userid == '0' && $posts == false && $postid == "0") {
            echo Http::get(SITE_URL . "users/") . "\n";
        } else {
            $this->error("Tekrar deneyiniz");
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
