<?php

declare(strict_types=1);

namespace QuizApp\Core\Component\Quiz\Domain;

final class QuizReplierActivityDomain
{
    private int $user_id;

    private int $question_id;

    private int $scheduled_id;

    private string $reply_content;

    private bool $is_correct;

    public function __construct(
        int $user_id,
        int $question_id,
        int $scheduled_id,
        string $reply_content,
        bool $is_correct
    ) {
        $this->user_id = $user_id;
        $this->question_id = $question_id;
        $this->scheduled_id = $scheduled_id;
        $this->reply_content = $reply_content;
        $this->is_correct = $is_correct;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function getQuestionId(): int
    {
        return $this->question_id;
    }

    public function getScheduledId(): int
    {
        return $this->scheduled_id;
    }

    public function getReplyContent(): string
    {
        return $this->reply_content;
    }

    public function isIsCorrect(): bool
    {
        return $this->is_correct;
    }
}
