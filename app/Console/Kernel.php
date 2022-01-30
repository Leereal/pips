<?php

namespace App\Console;
use App\Console\Commands\AutoTopup;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Settings;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\AutoTopup::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $settings = Settings::where('id', '=', '1')->first();

        // if ($settings->weekend_trade == "true") {
        //     $schedule->command('auto:topup')
        //     ->days([1,2,3,4,5])
        //     ->everyMinute();
        // } else {
            $schedule->command('auto:topup')
            ->everyMinute();
        //}
        
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
