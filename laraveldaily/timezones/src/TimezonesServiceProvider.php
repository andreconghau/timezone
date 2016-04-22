<?php

namespace Laraveldaily\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->loadViewsFrom(__DIR__.'/views', 'timezones');

        if (is_dir(base_path() . '/resources/views/laraveldaily/timezones')) {
            $this->loadViewsFrom(base_path() . '/resources/views/laraveldaily/timezones', 'timezones');
        } else {
            $this->loadViewsFrom(__DIR__.'/views', 'timezones');
        }

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/laraveldaily/timezones'),
        ]);

        $this->publishes([
            __DIR__.'/config/time.php' => config_path('time.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Laraveldaily\Timezones\TimezonesController');
    }
}
