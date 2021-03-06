<?php

namespace App\Console;
use App\Console\Commands\SendEmails;

// use App\Console\Commands\SendEmails;
use Illuminate\Console\Scheduling\Schedule;
// use Laravel\Lumen\Console\Commands\ServeCommand;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'App\Console\Commands\SendEmails'
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command(SendEmails::class)->everyMinute();
    }
}
