<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;
use Illuminate\Support\Facades\Http;

class GetCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'get {url : istek yapılacak url. <xyz.com/users> için <users> yazmak yeterli}';

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
        # SORU: Ana site adresini ($SITE_URL) her yerde yazmak yerine 
        # define(SITE_URL, "https://jsonplaceholder.typicode.com/") olarak nasıl yazarız.
        $SITE_URL = "https://jsonplaceholder.typicode.com/";

        $response = Http::get($SITE_URL . $this->argument("url"));

        echo $response . "\n";

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
