<?php

declare(strict_types=1);

namespace QuizApp\Core\Component\Quiz\Application\DTO;

use Illuminate\Http\Request;
use QuizApp\Core\Component\Quiz\Application\Enum\QuestionType;

final class QuestionDto
{
    private string $title;

    private QuestionType $type;

    private bool $status;

    public static function fromRequest(Request $request): QuestionDto
    {
        $self = (new self);
        $self->title = $request->input('title');
        $self->type = QuestionType::from($request->input('type'));
        $self->status = $request->input('status') ?? true;

        return $self;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getType(): QuestionType
    {
        return $this->type;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }
}
