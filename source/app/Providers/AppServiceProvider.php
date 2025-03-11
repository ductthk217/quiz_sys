<?php

namespace App\Providers;

use App\Http\Requests\Candidate\CandidateRequest;
use App\Repositories\Eloquent\CandidateRepository;
use App\Services\Interfaces\UserServiceInterface;
use App\Services\UserService;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Eloquent\UserRepository;
use App\Repositories\Interfaces\CandidateRepositoryInterface;
use App\Services\CandidateService;
use App\Services\Interfaces\CandidateServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Service
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(CandidateServiceInterface::class, CandidateService::class);

        // Repository
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(CandidateRepositoryInterface::class, CandidateRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       
    }
}
