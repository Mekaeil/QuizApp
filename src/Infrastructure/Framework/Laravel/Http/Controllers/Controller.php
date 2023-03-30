<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\Framework\Laravel\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

final class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
