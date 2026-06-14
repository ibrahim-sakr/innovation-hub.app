<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('level');
            $table->integer('students_count');
            $table->integer('lessons_count');
            $table->integer('duration');
            $table->integer('price');
            $table->integer('feature');
            $table->text('description');
            $table->integer('age_from');
            $table->integer('age_to')->nullable();
            $table->string('thumbnail');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
