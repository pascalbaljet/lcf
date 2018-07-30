<?php

namespace Pbmedia\CustomForms;

use Illuminate\Support\ServiceProvider;

class CustomFormsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/custom-forms.php' => config_path('custom-forms.php'),
            ], 'config');

            /*
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'custom-forms');

        $this->publishes([
        __DIR__.'/../resources/views' => base_path('resources/views/vendor/custom-forms'),
        ], 'views');
         */
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'custom-forms');
    }
}
