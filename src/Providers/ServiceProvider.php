<?php


namespace AlanVaill\LaravelProfilerAdmin\Providers;


use Arrilot\Widgets\ServiceProvider as WidgetServiceProvider;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../../views', 'profiler-admin');
        $this->loadRoutesFrom(__DIR__.'/../../routes/routes.php');

        $this->publishes([
            __DIR__.'/../../assets' => public_path('vendor/profiler-admin'),
        ], 'public');

        if ($this->app->runningInConsole()) {
            $this->commands([
                // commands
            ]);
        }

        $this->app->register(WidgetServiceProvider::class);
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/app.php', 'profiler-admin'
        );
    }
}