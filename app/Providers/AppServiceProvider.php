<?php

namespace App\Providers;

use App\Models\MenuItem;
use Illuminate\Support\Facades\Config;
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
     *'App\Http\Composers\MasterComposer'
     * @return void
     */
    public function boot()
    {

    }
}
