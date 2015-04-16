<?php namespace Terrain\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer('welcome', 'Terrain\Http\ViewComposers\ProfileComposer');

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
