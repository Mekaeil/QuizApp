<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\Quiz\Persistence\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class QuestionCategory extends Model
{
    use HasFactory;

    protected $table = 'quiz_question_categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
    ];

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(
            Question::class,
            'quiz_question_has_categories',
            'category_id',
            'question_id'
        );
    }
}
