<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\UsersRepository;
use App\Repository\Interfaces\UsersRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // $this->app->bind(
        //     UsersRepositoryInterface::class, 
        //     UsersRepository::class
        // );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
