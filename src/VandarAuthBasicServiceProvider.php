<?php

namespace Masoud5070\VandarAuthBasic;

use Illuminate\Support\ServiceProvider;
use Masoud5070\VandarAuthBasic\Console\Commands\GenerateUsersIntoDatabaseCommand;

class VandarAuthBasicServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'masoud5070');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'masoud5070');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
            $this->loadApps();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/vandarauthbasic.php', 'vandarauthbasic');

        // Register the service the package provides.
        $this->app->singleton('vandarauthbasic', function ($app) {
            return new VandarAuthBasic;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['vandarauthbasic'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.


        $this->publishes([
            __DIR__.'/../config/vandarauthbasic.php' => config_path('vandarauthbasic.php'),
        ], 'vandarauthbasic-config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/masoud5070'),
        ], 'vandarauthbasic.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/masoud5070'),
        ], 'vandarauthbasic.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/masoud5070'),
        ], 'vandarauthbasic.views');*/

        // Registering package commands.
        // $this->commands([]);
    }



    /**
     * Load app modules.
     *
     */
    private function loadApps()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadCommands();
    }



    /**
     * Load console commands
     *
     */
    private function loadCommands()
    {
        $this->commands([
            GenerateUsersIntoDatabaseCommand::class,
        ]);
    }
}
