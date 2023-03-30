<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\Quiz\Persistence\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Question extends Model
{
    use HasFactory;

    protected $table = 'quiz_questions';

    protected $fillable = [
        'title',
        'status',
        'type',
    ];

    public function replies(): BelongsToMany
    {
        return $this->belongsToMany(
            QuestionReply::class,
            'quiz_question_has_replies',
            'question_id',
            'reply_id'
        )->withPivot('is_correct_reply');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            QuestionCategory::class,
            'quiz_question_has_categories',
            'question_id',
            'category_id'
        );
    }

    public function quizBoxes(): BelongsToMany
    {
        return $this->belongsToMany(
            QuizBox::class,
            'quiz_box_has_questions',
            'question_id',
            'quiz_box_id'
        )->withPivot('status');
    }

    public function activities(): HasMany
    {
        return $this->hasMany(QuizReplierActivity::class, 'question_id', 'id');
    }
}
