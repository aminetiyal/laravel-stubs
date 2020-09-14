<?php

namespace Aminetiyal\LaravelStubs;

use Aminetiyal\LaravelStubs\Commands\PublishStubsCommand;
use Illuminate\Support\ServiceProvider;

class StubsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../stubs' => base_path('stubs'),
            ], 'aminetiyal:stubs');

            // Registering package commands.
            $this->commands([PublishStubsCommand::class]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
