<?php

namespace jeremykenedy\Laravelpodcast;

use Illuminate\Support\ServiceProvider;

class PodcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->loadViewsFrom(__DIR__.'/resources/views/', 'laravelpodcast');

        $this->publishes([
            __DIR__.'/public/css' => public_path('vendor/laravelpodcast'),
        ], 'podcast');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('jeremykenedy\laravelpodcast\app\Http\Controllers\PodcastsController');
        $this->app->make('jeremykenedy\laravelpodcast\app\Http\Controllers\PodcastItemsController');
    }
}
