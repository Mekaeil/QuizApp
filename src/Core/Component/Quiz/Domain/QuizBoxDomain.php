<?php

declare(strict_types=1);

namespace QuizApp\Core\Component\Quiz\Domain;

final class QuizBoxDomain
{
    private string $subject;

    private string $description;

    private bool $status;

    public function __construct(
        string $subject,
        string $description,
        bool $status
    )
    {
        $this->subject = $subject;
        $this->description = $description;
        $this->status = $status;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function isStatus(): bool
    {
        return $this->status;
    }

}
