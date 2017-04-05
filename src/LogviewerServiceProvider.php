<?php

namespace Ridrog\LogViewer;

use Illuminate\Support\ServiceProvider;

class LogViewerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/Views', 'adminlte-logviewer');

        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/log-viewer'),
        ], 'adminlte-logviewer-views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
