<?php

namespace Sanjeevscet\Timezones;

use Illuminate\Support\ServiceProvider;

class TimezonesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
		$this->publishes([
			__DIR__.'/views' => base_path('resources/views/sanjeevscet/timezones'),
		]);
        $this->loadViewsFrom(__DIR__.'/views', 'timezones');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('Sanjeevscet\Timezones\TimezonesController');        
    }
}
