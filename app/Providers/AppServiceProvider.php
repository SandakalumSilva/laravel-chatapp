<?php

namespace App\Providers;

use App\Interfaces\MessangerInterface;
use App\Interfaces\UserProfileInterface;
use App\Repositories\MessangerRepository;
use App\Repositories\UserProfileRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(MessangerInterface::class,MessangerRepository::class);
        $this->app->bind(UserProfileInterface::class,UserProfileRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
