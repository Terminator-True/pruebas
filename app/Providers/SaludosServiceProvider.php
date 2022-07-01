<?php

namespace App\Providers;

use App\Custom\Saludo\Hola;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class SaludosServiceProvider extends ServiceProvider
{
    // public $bindings = [
    //     "hola"=> Hola::class
    // ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('hola',function($app){
            return new Hola;
        });
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
