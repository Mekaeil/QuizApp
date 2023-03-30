<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\Quiz\Persistence\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class QuestionReply extends Model
{
    use HasFactory;

    protected $table = 'quiz_question_replies';

    protected $fillable = [
        'content',
    ];

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(
            Question::class,
            'quiz_question_has_replies',
            'reply_id',
            'question_id'
        )->withPivot('is_correct_reply');
    }
}
