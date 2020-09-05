<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
//        \Validator::extend('jedi', function ($att, $value, $param, $validator) {
//            //dd($att, $value, $param, $validator);
//            return false;
//        });
    }
}
