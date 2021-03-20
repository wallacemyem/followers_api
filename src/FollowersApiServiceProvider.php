<?php

namespace Wallace\FollowersApi;

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
            __DIR__.'/../config/followersapi.php' => config_path('followersapi.php'),
        ], 'followersapi-config');
    }

    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/followersapi.php',
            'followersapi'
        );
    }
}