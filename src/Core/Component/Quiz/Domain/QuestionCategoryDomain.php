<?php

declare(strict_types=1);

namespace QuizApp\Core\Component\Quiz\Domain;

final class QuestionCategoryDomain
{
    private string $name;

    private string $slug;

    private string $description;

    private bool $status;

    public function __construct(
        string $name,
        string $slug,
        string $description,
        bool $status
    ) {
        $this->name = $name;
        $this->slug = $slug;
        $this->description = $description;
        $this->status = $status;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSlug(): string
    {
        return $this->slug;
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
