<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\Framework\Laravel;

use Illuminate\Foundation\Application as FrameworkApplication;

final class Application extends FrameworkApplication
{
    protected $namespace = 'Presentation\\';
}
