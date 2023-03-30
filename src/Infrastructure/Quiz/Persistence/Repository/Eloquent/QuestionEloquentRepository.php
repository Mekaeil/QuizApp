<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\Quiz\Persistence\Repository\Eloquent;

use QuizApp\Core\Component\Quiz\Application\DTO\QuestionDto;
use QuizApp\Core\Component\Quiz\Application\Repository\QuestionRepositoryInterface;
use QuizApp\Core\Component\Quiz\Domain\QuestionDomain;

final class QuestionEloquentRepository implements QuestionRepositoryInterface
{

    public function create(QuestionDto $questionDto): QuestionDomain
    {
        // TODO: Implement create() method.
    }

    public function findById(int $questionId): QuestionDomain
    {
        // TODO: Implement findById() method.
    }
}
