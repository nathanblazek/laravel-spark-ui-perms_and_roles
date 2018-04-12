<?php

namespace ncb\PermsAndRoles;

use Illuminate\Support\ServiceProvider;

class PermsAndRolesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //put routes, event listeners, or other functionality here
        include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('ncb\PermsAndRoles\Controller\PermissionController');
        $this->app->make('ncb\PermsAndRoles\Controller\RoleController');

        $this->loadViewsFrom(__DIR__.'/views', 'PermsAndRoles');
    }
}
