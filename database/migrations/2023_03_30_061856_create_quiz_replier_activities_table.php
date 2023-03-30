<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quiz_replier_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('scheduled_id');
            $table->string('reply_content');
            $table->boolean('is_correct');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreign('question_id')
                ->references('id')
                ->on('quiz_questions')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreign('scheduled_id')
                ->references('id')
                ->on('quiz_scheduled_quiz_boxes')
                ->cascadeOnUpdate()
                ->restrictOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_replier_activities');
    }
};
