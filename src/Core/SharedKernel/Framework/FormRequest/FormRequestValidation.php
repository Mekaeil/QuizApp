<?php

declare(strict_types=1);

namespace QuizApp\Core\SharedKernel\Framework\FormRequest;

use Illuminate\Foundation\Http\FormRequest;

abstract class FormRequestValidation extends FormRequest
{
    public function __construct(array $query = [], array $request = [], array $attributes = [], array $cookies = [], array $files = [], array $server = [], $content = null)
    {
        parent::__construct($query, $request, $attributes, $cookies, $files, $server, $content);
        $this->setUp();
    }

    abstract public function rules(): array;

    public function setUp()
    {
        // TODO: Implement setUp() method.
    }
}
