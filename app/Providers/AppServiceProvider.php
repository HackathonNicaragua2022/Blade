<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//Paginación de bootstrap
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Paginación de bootstrap
        Paginator::useBootstrap();
    }
}
