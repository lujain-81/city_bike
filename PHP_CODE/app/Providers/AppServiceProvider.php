<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;
use App\Models\CompanyInformation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Sanctum::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(config('app.debug')){
            config()->set('cache.default', 'none');
        }
        view()->composer('*', function ($view) {
            $view->with('settings', CompanyInformation::latest('CompanyID')->first());
        });
    }
}
