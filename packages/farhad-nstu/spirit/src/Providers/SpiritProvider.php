<?php

namespace FarhadNstu\Spirit\Providers;

use Illuminate\Support\ServiceProvider;

class SpiritProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'spirit');
    }
}
