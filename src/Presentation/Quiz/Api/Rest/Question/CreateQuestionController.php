<?php

declare(strict_types=1);

namespace QuizApp\Presentation\Quiz\Api\Rest\Question;

use Illuminate\Http\JsonResponse;
use QuizApp\Core\Component\Quiz\Application\DTO\QuestionDto;
use QuizApp\Core\Component\Quiz\Application\Repository\QuestionRepositoryInterface;
use QuizApp\Presentation\Quiz\FormRequest\CreateQuestionFormRequest;

final class CreateQuestionController
{
    private QuestionRepositoryInterface $questionRepository;

    public function __construct(QuestionRepositoryInterface $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

    public function __invoke(CreateQuestionFormRequest $request): JsonResponse
    {
        $dtoQuestion = QuestionDto::fromRequest($request);

        $questionDomain = $this->questionRepository->create($dtoQuestion);

        return response()->json([
            'title' => $questionDomain->getTitle(),
            'type' => $questionDomain->getType()->value,
            'status' => $questionDomain->isStatus(),
        ]);
    }
}
