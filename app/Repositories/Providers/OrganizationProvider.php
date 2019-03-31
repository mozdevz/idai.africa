<?php

namespace App\Repositories\Providers;

use Illuminate\Support\ServiceProvider;

class OrganizationProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // organization bind
        $this->app->bind(
            'App\Repositories\Contracts\Organization',
            'App\Repositories\Repositories\OrganizationRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
