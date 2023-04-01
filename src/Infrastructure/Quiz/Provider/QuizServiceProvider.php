<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\Quiz\Provider;

use Illuminate\Support\ServiceProvider;
use QuizApp\Core\Component\Quiz\Application\Repository\QuestionCategoryRepositoryInterface;
use QuizApp\Core\Component\Quiz\Application\Repository\QuestionRepositoryInterface;
use QuizApp\Core\Component\Quiz\Application\Repository\QuizBoxRepositoryInterface;
use QuizApp\Infrastructure\Quiz\Persistence\Repository\Eloquent\QuestionCategoryEloquentRepository;
use QuizApp\Infrastructure\Quiz\Persistence\Repository\Eloquent\QuestionEloquentRepository;
use QuizApp\Infrastructure\Quiz\Persistence\Repository\Eloquent\QuizBoxEloquentRepository;

final class QuizServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->register(QuizRouteServiceProvider::class);

        /*
        |--------------------------------------------------------------------------
        | REPOSITORY BINDING
        |--------------------------------------------------------------------------
        */

        $this->app->bind(QuestionRepositoryInterface::class, QuestionEloquentRepository::class);
        $this->app->bind(QuestionCategoryRepositoryInterface::class, QuestionCategoryEloquentRepository::class);
        $this->app->bind(QuizBoxRepositoryInterface::class, QuizBoxEloquentRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    }
}
