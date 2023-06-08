<?php

namespace App\Providers;

use App\Http\Services\Unit;
use App\Http\Services\SquareArea;
use App\Http\Services\AreaService;
use App\Http\Services\RectangleArea;
use Illuminate\Support\ServiceProvider;

class AreaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(AreaService::class, function ($app) {
            return new SquareArea();
        });

        $this->app->bind(AreaService::class, function ($app) {
            return new RectangleArea();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
