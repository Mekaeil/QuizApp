<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quiz_scheduled_quiz_boxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quiz_box_id');
            $table->string('reply_type')->comment('We have an enum file in the Core Component.');
            $table->dateTime('due_date')->comment('When the questions will send to the users');
            $table->timestamps();

            $table->foreign('quiz_box_id')
                ->references('id')
                ->on('quiz_boxes')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_scheduled_quiz_box');
    }
};
