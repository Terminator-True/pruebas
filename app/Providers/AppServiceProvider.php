<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Custom\Saludo\Hola;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind('Hola', function($app){
        //     return new Hola;
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
