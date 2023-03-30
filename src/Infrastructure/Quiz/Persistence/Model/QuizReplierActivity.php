<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\Quiz\Persistence\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use QuizApp\Infrastructure\User\Persistence\Model\User;

final class QuizReplierActivity extends Model
{
    use HasFactory;

    protected $table = 'quiz_replier_activities';

    protected $fillable = [
        'user_id',
        'question_id',
        'scheduled_id',
        'reply_content',
        'is_correct',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }

    public function schedule(): BelongsTo
    {
        return $this->belongsTo(ScheduledQuizBox::class, 'scheduled_id', 'id');
    }
}
