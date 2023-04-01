<?php

use Illuminate\Support\Facades\Route;
use QuizApp\Presentation\Quiz\Api\Rest\Question\CreateQuestionController;

Route::group([
    'prefix' => 'question',
], function () {
    Route::post('/create', CreateQuestionController::class);
});
