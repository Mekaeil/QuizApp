<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\Quiz\Provider;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

final class QuizRouteServiceProvider extends ServiceProvider
{
    protected string $moduleWebNamespace = 'QuizApp\Presentation\Quiz\Web\Controller';

    protected string $moduleApiNamespace = 'QuizApp\Presentation\Quiz\Api\Rest';

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapApiV1Routes();
    }

    private function mapApiV1Routes()
    {
        Route::middleware(['api'])
            ->prefix('v1/quiz')
            ->as('api.v1.quiz.')
            ->namespace($this->moduleApiNamespace)
            ->group(base_path('src/Presentation/Quiz/Route/api.v1.php'));
    }
}
