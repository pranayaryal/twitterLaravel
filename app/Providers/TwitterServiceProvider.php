<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\Twitter;

class TwitterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Service\ExternalApiInterface', 'App\Service\Twitter');
    }
}
