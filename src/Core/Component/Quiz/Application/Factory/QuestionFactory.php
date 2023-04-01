<?php

declare(strict_types=1);

namespace QuizApp\Core\Component\Quiz\Application\Factory;

use Illuminate\Database\Eloquent\Model;
use QuizApp\Core\Component\Quiz\Application\Enum\QuestionType;
use QuizApp\Core\Component\Quiz\Domain\QuestionDomain;

final class QuestionFactory
{
    public static function fromEloquent(Model $question): QuestionDomain
    {
        return new QuestionDomain(
            $question->title,
            QuestionType::from($question->type),
            $question->status
        );
    }
}
