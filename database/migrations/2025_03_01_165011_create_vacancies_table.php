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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('type')->nullable();
            $table->string('location')->nullable();
            $table->date('end_date')->nullable();
            $table->json('benefits')->nullable();
            $table->json('responsibilities');
            $table->json('requirements');
            $table->json('skills_required');
            $table->string('weekly_holidays');
            $table->string('salary');
            $table->text('others')->nullable();
            $table->unsignedBigInteger('category_id'); // Foreign key
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            // Setting up the foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
