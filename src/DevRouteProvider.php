<?php

namespace Tobya\DevRoute;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class DevRouteProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
            if (!file_exists(base_path('routes/devroutes.php'))){
                copy( __DIR__.'/../routes/devroutes.php',base_path('routes/devroutes.php'));
            }



    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
            // load test routes when local dev
            if (Config('app.env') != 'production'){
                \Route::prefix('dev')
                    ->middleware('web')
                    ->group(base_path('routes/devroutes.php'));
            }
    }
}
