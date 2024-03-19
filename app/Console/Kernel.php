<?php

namespace App\Console;

use Carbon\Traits\Boundaries;
use app\Models\Cart;
use app\Models\Product;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
//         $schedule->command('inspire')->everySecond();
        $schedule->call(function () {
            Product::first()->delete();
        })->everySecond();
   }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
