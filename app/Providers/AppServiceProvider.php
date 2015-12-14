<?php

namespace MenuWithAuthentication\Providers;

use Illuminate\Support\ServiceProvider;
use MenuWithAuthentication\MenuWithAuthentication;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require app_path('bootsrap/menu.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
