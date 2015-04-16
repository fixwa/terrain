<?php namespace Terrain\Providers;

use View;
use Illuminate\Support\ServiceProvider;
use Terrain\Http\ViewComposers\LandsComposer;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer('_shared.lands-map', LandsComposer::class);

        // Using Closure based composers...
        View::composer('dashboard', function($view)
        {

        });
    }

    /**
     * Register
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
