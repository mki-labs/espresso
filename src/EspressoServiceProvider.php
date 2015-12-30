<?php namespace MkiLabs\Espresso;

use Illuminate\Support\ServiceProvider;

class EspressoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        $this->loadViewsFrom(__DIR__ . '/resources/views/espresso', 'espresso');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        // include custom routes
        include __DIR__.'/Http/routes.php';

        $this->app->bind('espresso', function() {
            return new Espresso;
        });
    }
}
