<?php

namespace App\Providers;

use Illuminate\Contracts\Pagination\LengthAwarePaginator as PaginationLengthAwarePaginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Paginatio\LengthAwarePaginator;

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
        // Paginator::useTailwind();
        // Paginator::useBootstrap();
        Paginator::useBootstrapFive();
    }
}
