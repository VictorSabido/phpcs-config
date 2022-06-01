<?php

namespace VSABIDO\PHPCSCONFIG;

use Illuminate\Support\ServiceProvider;

class PhpcsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/ruleset.xml' => base_path('ruleset.xml')
        ], 'config');
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
