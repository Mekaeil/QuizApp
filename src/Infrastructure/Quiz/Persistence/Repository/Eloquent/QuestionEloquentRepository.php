<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\Quiz\Persistence\Repository\Eloquent;

use QuizApp\Core\Component\Quiz\Application\DTO\QuestionDto;
use QuizApp\Core\Component\Quiz\Application\Factory\QuestionFactory;
use QuizApp\Core\Component\Quiz\Application\Repository\QuestionRepositoryInterface;
use QuizApp\Core\Component\Quiz\Domain\QuestionDomain;
use QuizApp\Infrastructure\Quiz\Persistence\Model\Question;

final class QuestionEloquentRepository implements QuestionRepositoryInterface
{
    public function create(QuestionDto $questionDto): QuestionDomain
    {
        $question = Question::create([
            'title' => $questionDto->getTitle(),
            'type' => $questionDto->getType()->value,
            'status' => $questionDto->getStatus(),
        ]);

        return QuestionFactory::fromEloquent($question);
    }

    public function findById(int $questionId): QuestionDomain
    {
        // TODO: Implement findById() method.
    }
}
