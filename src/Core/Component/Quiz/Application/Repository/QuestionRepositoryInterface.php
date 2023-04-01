<?php

declare(strict_types=1);

namespace QuizApp\Core\Component\Quiz\Application\Repository;

use QuizApp\Core\Component\Quiz\Application\DTO\QuestionDto;
use QuizApp\Core\Component\Quiz\Domain\QuestionDomain;

interface QuestionRepositoryInterface
{
    public function create(QuestionDto $questionDto): QuestionDomain;

    public function findById(int $questionId): QuestionDomain;
}
