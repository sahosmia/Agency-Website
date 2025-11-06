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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('thumbnail');
            $table->string('live_preview_link');
            $table->text('short_text');
            $table->text('project_overview');
            $table->text('problem');
            $table->text('challenge');
            $table->text('workflow_scenario');
            $table->text('solutions');
            $table->json('screenshots');
            $table->json('images');
            $table->json('thumbnails');
            $table->unsignedBigInteger('project_category_id'); // Foreign key
            $table->unsignedBigInteger('client_review_id'); // Foreign key
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            // Setting up the foreign key constraint
            $table->foreign('project_category_id')->references('id')->on('project_categories')->onDelete('cascade');
            $table->foreign('client_review_id')->references('id')->on('client_reviews')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
