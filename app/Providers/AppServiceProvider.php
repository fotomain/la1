<?php

namespace App\Providers;

//S+ pattern
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
      //S+ pattern1
      Route::pattern('id', '[0-9]+');
    }
}
