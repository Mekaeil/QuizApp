<?php

declare(strict_types=1);

namespace QuizApp\Core\Component\Quiz\Domain;

use QuizApp\Core\Component\Quiz\Application\Enum\QuestionType;

final class QuestionDomain
{
    private string $title;

    private QuestionType $type;

    private bool $status;

    public function __construct(
        string $title,
        QuestionType $type,
        bool $status
    ) {
        $this->title = $title;
        $this->type = $type;
        $this->status = $status;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getType(): QuestionType
    {
        return $this->type;
    }

    public function isStatus(): bool
    {
        return $this->status;
    }
}
