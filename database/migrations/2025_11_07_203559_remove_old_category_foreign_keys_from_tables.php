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
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign(['article_category_id']);
            $table->dropColumn('article_category_id');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign(['project_category_id']);
            $table->dropColumn('project_category_id');
        });

        Schema::table('services', function (Blueprint $table) {
            $table->dropForeign(['service_category_id']);
            $table->dropColumn('service_category_id');
        });

        Schema::table('softwares', function (Blueprint $table) {
            $table->dropForeign(['software_category_id']);
            $table->dropColumn('software_category_id');
        });

        Schema::table('vacancies', function (Blueprint $table) {
            $table->dropForeign(['vacancy_category_id']);
            $table->dropColumn('vacancy_category_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->foreignId('article_category_id')->nullable()->constrained()->onDelete('set null');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->foreignId('project_category_id')->nullable()->constrained()->onDelete('set null');
        });

        Schema::table('services', function (Blueprint $table) {
            $table->foreignId('service_category_id')->nullable()->constrained()->onDelete('set null');
        });

        Schema::table('softwares', function (Blueprint $table) {
            $table->foreignId('software_category_id')->nullable()->constrained()->onDelete('set null');
        });

        Schema::table('vacancies', function (Blueprint $table) {
            $table->foreignId('vacancy_category_id')->nullable()->constrained()->onDelete('set null');
        });
    }
};
