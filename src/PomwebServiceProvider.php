<?php

namespace SilhouettePom\Pomweb;

use Illuminate\Support\ServiceProvider;

class PomwebServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'silhouettepom');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'silhouettepom');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/pomweb.php', 'pomweb');

        // Register the service the package provides.
        $this->app->singleton('pomweb', function ($app) {
            return new Pomweb;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['pomweb'];
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
            __DIR__.'/../config/pomweb.php' => config_path('pomweb.php'),
        ], 'pomweb.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/silhouettepom'),
        ], 'pomweb.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/silhouettepom'),
        ], 'pomweb.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/silhouettepom'),
        ], 'pomweb.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
