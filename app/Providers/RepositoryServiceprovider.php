<?php

namespace App\Providers;
use App\RepositoryInterface\DonationRequestInterface;
use App\Repository\DBRequest;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceprovider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(DonationRequestInterface::class,DBRequest::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
