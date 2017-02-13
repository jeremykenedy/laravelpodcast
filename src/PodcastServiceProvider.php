<?php

namespace jeremykenedy\Podcast;

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
        $this->loadViewsFrom(__DIR__.'/views', 'podcast');

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/podcast'),
            //__DIR__.'app/Controllers' => base_path('app/Http/Controllers/Podcast'),
            //__DIR__.'app/Models' => base_path('app/'),
            //__DIR__.'/routes' => base_path('/routes'),
        ]);

        // $this->publishes([
        //     __DIR__.'/path/to/views' => resource_path('views/vendor/courier'),
        // ]);

        // $this->publishes([
        //     __DIR__.'/path/to/assets' => public_path('vendor/jeremykenedy'),
        // ], 'public');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');

        if ($this->app->runningInConsole()) {
            $this->commands([
                UpdatePodcastItems::class,
            ]);
        }

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('jeremykenedy\Podcast\app\Http\Controllers\PodcastsController');
        $this->app->make('jeremykenedy\Podcast\app\Http\Controllers\PodcastsItemsController');
    }
}
