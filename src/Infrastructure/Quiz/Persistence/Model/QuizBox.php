<?php

declare(strict_types=1);

namespace QuizApp\Infrastructure\Quiz\Persistence\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

final class QuizBox extends Model
{
    use HasFactory;

    protected $table = 'quiz_boxes';

    protected $fillable = [
        'subject',
        'description',
        'status',
    ];

    public function questions(): BelongsToMany
    {
        return $this->belongsToMany(
            Question::class,
            'quiz_box_has_questions',
            'quiz_box_id',
            'question_id'
        )->withPivot('status');
    }
}
