<?php

namespace App\Providers;

use App\Logger\LogService;
use Illuminate\Support\ServiceProvider;
use Psr\Log\LoggerInterface;

class LoggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            LoggerInterface::class,
            function () {
                return new LogService(app('log')->getMonolog());
            }
        );
    }
}
