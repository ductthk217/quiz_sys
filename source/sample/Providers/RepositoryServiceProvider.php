<?php

namespace Sample\Repositories\Providers;

use Illuminate\Support\ServiceProvider;
use Sample\Repositories\Interfaces\UserRepositoryInterface;
use Sample\Repositories\Repositories\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Summary of register
     */
    public function register()
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        //
    }

    /**
     * Summary of boot
     * 
     * @return void
     */
    public function boot()
    {
        //
    }
}
