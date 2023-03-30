<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\Quiz\Persistence\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class ScheduledQuizBox extends Model
{
    use HasFactory;

    protected $table = 'quiz_scheduled_quiz_boxes';

    protected $fillable = [
        'quiz_box_id',
        'reply_type',
        'due_date',
    ];

    public function quizBox(): BelongsTo
    {
        return $this->belongsTo(QuizBox::class, 'quiz_box_id', 'id');
    }

    public function activities(): HasMany
    {
        return $this->hasMany(QuizReplierActivity::class, 'scheduled_id', 'id');
    }
}
