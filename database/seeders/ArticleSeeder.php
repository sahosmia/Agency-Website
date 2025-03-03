<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ArticleSeeder extends Seeder
{
    public function run()
    {
        $categories = ArticleCategory::all(); // Get existing categories

        if ($categories->isEmpty()) {
            $this->call(ArticleCategorySeeder::class); // Ensure categories exist
            $categories = ArticleCategory::all();
        }

        // Creating articles for each category
        foreach ($categories as $category) {
            Article::create([
                'title' => "Sample Article in {$category->title}",
                'thumbnail' => 'sample-thumbnail.jpg',
                'short_text' => 'This is a short description of the article.',
                'long_text' => 'This is a long text with more details about the article.',
                'article_category_id' => $category->id,
            ]);
        }
    }
}
