<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\Twitter;

class SocialMediaApiServiceProvider extends ServiceProvider
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
        $this->app->bind('App\Service\SocialMediaApiInterface', 'App\Service\Twitter');
    }
}
