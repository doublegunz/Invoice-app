<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
Use Illuminate\Support\Facades\Schema;
use App\Invoice_detail;
use App\Observers\Invoice_detailObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Invoice_detail::observe(Invoice_detailObserver::class);
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
