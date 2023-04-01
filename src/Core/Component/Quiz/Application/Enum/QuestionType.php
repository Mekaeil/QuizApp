<?php

declare(strict_types=1);

namespace QuizApp\Core\Component\Quiz\Application\Enum;

enum QuestionType: string
{
    case SELECT = 'SELECT';

    case MULTI_SELECT = 'MULTI_SELECT';

    case TEXT = 'TEXT';

    public static function toArray(): array
    {
        return array_map(function ($type) {
            return $type->value;
        }, self::cases());
    }
}
