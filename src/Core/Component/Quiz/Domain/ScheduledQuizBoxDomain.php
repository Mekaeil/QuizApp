<?php

declare(strict_types=1);

namespace QuizApp\Core\Component\Quiz\Domain;

use Carbon\CarbonImmutable;
use QuizApp\Core\Component\Quiz\Application\Enum\QuizBoxReplyType;

final class ScheduledQuizBoxDomain
{
    private int $quizBoxId;

    private QuizBoxReplyType $replyType;

    private CarbonImmutable $dueDate;

    public function __construct(
        int $quizBoxId,
        QuizBoxReplyType $replyType,
        CarbonImmutable $dueDate
    ) {
        $this->quizBoxId = $quizBoxId;
        $this->replyType = $replyType;
        $this->dueDate = $dueDate;
    }

    public function getQuizBoxId(): int
    {
        return $this->quizBoxId;
    }

    public function getReplyType(): QuizBoxReplyType
    {
        return $this->replyType;
    }

    public function getDueDate(): CarbonImmutable
    {
        return $this->dueDate;
    }
}
