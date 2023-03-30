<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quiz_box_has_questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quiz_box_id');
            $table->unsignedBigInteger('question_id');
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('quiz_box_id')
                ->references('id')
                ->on('quiz_boxes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();

            $table->foreign('question_id')
                ->references('id')
                ->on('quiz_questions')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_box_has_questions');
    }
};
