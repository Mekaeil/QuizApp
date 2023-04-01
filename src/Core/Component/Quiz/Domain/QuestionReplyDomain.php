<?php

declare(strict_types=1);

namespace QuizApp\Core\Component\Quiz\Domain;

final class QuestionReplyDomain
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
