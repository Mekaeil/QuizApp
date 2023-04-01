<?php

declare(strict_types=1);

namespace QuizApp\Presentation\Quiz\Api\Rest\Quiz;

use Illuminate\Http\JsonResponse;
use QuizApp\Core\Component\Quiz\Application\Repository\QuizBoxRepositoryInterface;

final class CreateQuizController
{
    private QuizBoxRepositoryInterface $quizBoxRepository;

    public function __construct(QuizBoxRepositoryInterface $quizBoxRepository)
    {
        $this->quizBoxRepository = $quizBoxRepository;
    }

    public function __invoke(): JsonResponse
    {
        return response()->json([
            'title' => 'Not implemented yet!',
        ]);
    }
}
