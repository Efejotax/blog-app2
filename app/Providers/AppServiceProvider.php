<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//Escribimos este código:
use Illuminate\Support\Facades\Schema; 

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
        
        //Este método nos ayuda a hacer migraciones a la BD
        Schema::defaultStringLength(191);
    }
}
