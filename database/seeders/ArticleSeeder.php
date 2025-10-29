<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        $categories = ArticleCategory::all(); // Get existing categories
        $tags = Tag::all();

        if ($categories->isEmpty()) {
            $this->call(ArticleCategorySeeder::class); // Ensure categories exist
            $categories = ArticleCategory::all();
        }

        if ($tags->isEmpty()) {
            $this->call(TagSeeder::class);
            $tags = Tag::all();
        }

        // Creating articles for each category
        foreach ($categories as $category) {
            $article = Article::create([
                'title' => "Sample Article in {$category->title}",
                'slug' => Str::slug("Sample Article in {$category->title}"),
                'thumbnail' => 'sample-thumbnail.jpg',
                'short_text' => 'This is a short description of the article.',
                'long_text' => 'This is a long text with more details about the article.',
                'article_category_id' => $category->id,
            ]);

            $article->tags()->attach($tags->random(3));
        }
    }
}
