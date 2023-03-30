<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quiz_question_has_replies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('reply_id');
            $table->timestamps();

            $table->foreign('question_id')
                ->references('id')
                ->on('quiz_questions')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreign('reply_id')
                ->references('id')
                ->on('quiz_question_replies')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_question_has_replies');
    }
};
