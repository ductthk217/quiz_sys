<?php

namespace App\Providers;

use App\Services\Interfaces\UserServiceInterface;
use App\Services\UserService;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\Eloquent\UserRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Interfaces\QuestionCategoryRepositoryInterface;
use App\Repositories\Eloquent\QuestionCategoryRepository;
use App\Services\Interfaces\QuestionCategoryServiceInterface;
use App\Services\QuestionCategoryService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Service
        $this->app->bind(UserServiceInterface::class, UserService::class);
        $this->app->bind(QuestionCategoryServiceInterface::class, QuestionCategoryService::class);

        // Repository
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(QuestionCategoryRepositoryInterface::class, QuestionCategoryRepository::class);
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
