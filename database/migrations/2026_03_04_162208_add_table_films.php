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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('poster_image')->nullable();
            $table->string('preview_image')->nullable();
            $table->string('background_image')->nullable();
            $table->string('background_color', length: 9)->nullable();
            $table->string('video_link')->nullable();
            $table->string('preview_video_link')->nullable();
            $table->text('description')->nullable();
            $table->string('director')->nullable();
            $table->json('starring')->nullable();
            $table->integer('run_time')->nullable();
            $table->integer('released')->nullable();
            $table->string('imdb_id')->unique();
            $table->enum('status', ['pending', 'on moderation', 'ready'])->default('pending');
            $table->float('rating', precision: 1)->nullable();
            $table->integer('scores_count')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
