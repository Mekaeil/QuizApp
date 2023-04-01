<?php

declare(strict_types=1);

namespace QuizApp\Presentation\Quiz\FormRequest;

use QuizApp\Core\Component\Quiz\Application\Enum\QuestionType;
use QuizApp\Core\SharedKernel\Framework\FormRequest\FormRequestValidation;

final class CreateQuestionFormRequest extends FormRequestValidation
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:3',
            'type' => 'required|string|in:'.implode(',', QuestionType::toArray()),
            'status' => 'nullable|bool',
        ];
    }
}
