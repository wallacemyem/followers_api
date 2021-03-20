<?php

namespace Wallace\FollowersApiServiceProvider;

use Illuminate\Support\ServiceProvider;

class FollowersApiServiceProvider extends ServiceProvider
{
    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/followers_api.php' => config_path('followers_api.php'),
        ], 'followers_api-config');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/followers_api.php',
            'followers_api'
        );
    }
}