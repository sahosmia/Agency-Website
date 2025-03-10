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
            $table->string('type');
            $table->string('location');
            $table->date('end_date');
            $table->text('benefits');
            $table->text('responsibilities');
            $table->text('requirements');
            $table->text('skills_required');
            $table->string('weekly_holidays');
            $table->string('salary');
            $table->text('others')->nullable();
            $table->unsignedBigInteger('vacancy_category_id'); // Foreign key
            $table->timestamps();

            // Setting up the foreign key constraint
            $table->foreign('vacancy_category_id')->references('id')->on('vacancy_categories')->onDelete('cascade');
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
