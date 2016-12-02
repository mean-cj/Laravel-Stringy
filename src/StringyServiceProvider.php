<?php

namespace BrianFaust\Stringy;

use Illuminate\Support\ServiceProvider as IlluminateProvider;
use Stringy\StaticStringy;

class StringyServiceProvider extends IlluminateProvider
{
    public function register()
    {
        $this->app->singleton('stringy', function ($app) {
            return new StaticStringy();
        });
    }
}