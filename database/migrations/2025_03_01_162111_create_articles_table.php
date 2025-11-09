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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('thumbnail');
            $table->text('short_text');
            $table->text('long_text');
            $table->unsignedBigInteger('category_id'); // Foreign key
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
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
        Schema::dropIfExists('articles');
    }
};
