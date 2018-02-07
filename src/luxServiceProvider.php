<?php

namespace michau85\lux;

use Illuminate\Support\ServiceProvider;

class luxServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $bp=base_path('/vendor/michau85/lux/src/routes.php');
        $this->loadRoutesFrom($bp);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
