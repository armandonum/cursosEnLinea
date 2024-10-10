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
            $table->increments('id');
            $table->unsignedInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->unsignedInteger('category_id');
           $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedInteger('level_id');
            $table->foreign('level_id')->references('id')->on('levels');
           
            $table->string('name');
            $table->text('description');
            $table->string('slug');
            $table->string('picture');
            $table->enum('status', [
                \App\Models\Courses::PUBLISHED,
                \App\Models\Courses::PENDING,
                \App\Models\Courses::REJECTED
            ])->default(\App\Models\Courses::PENDING);
            $table->boolean('previous_approved')->default(false);
            $table->boolean('previous_rejected')->default(false);
            
            $table->timestamps();
            $table->softDeletes();
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
