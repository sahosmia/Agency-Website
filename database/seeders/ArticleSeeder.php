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

        $articles = [
            [
                'title' => 'Marketing Insights: Email Campaign Strategies',
                'slug' => Str::slug('Marketing Insights: Email Campaign Strategies'),
                'thumbnail' => 'email-campaign-strategies.jpg',
                'short_text' => 'Discover effective email campaign strategies to boost your marketing efforts.',
                'long_text' => 'In-depth analysis of successful email marketing campaigns...',
                'article_category_id' => $categories->first()->id,
                'meta_title' => 'Marketing Insights: Email Campaign Strategies',
                'meta_description' => 'Discover effective email campaign strategies to boost your marketing efforts.',
            ],
            [
                'title' => 'Designers Hub: Tips and Tricks for Creatives',
                'slug' => Str::slug('Designers Hub: Tips and Tricks for Creatives'),
                'thumbnail' => 'designers-hub-tips.jpg',
                'short_text' => 'A comprehensive guide for designers to enhance their creative skills.',
                'long_text' => 'Explore various design techniques and tools to elevate your work...',
                'article_category_id' => $categories->skip(1)->first()->id,
                'is_active' => true,
                'meta_title' => 'Designers Hub: Tips and Tricks for Creatives',
                'meta_description' => 'A comprehensive guide for designers to enhance their creative skills.',
            ],
            [
                'title' => 'Code Crafting: Mastering Web Development',
                'slug' => Str::slug('Code Crafting: Mastering Web Development'),
                'thumbnail' => 'mastering-web-development.jpg',
                'short_text' => 'Learn the art of web development with practical coding tips and best practices.',
                'long_text' => 'This article delves into modern web development frameworks and methodologies...',
                'article_category_id' => $categories->skip(2)->first()->id,
                'is_active' => true,
                'meta_title' => 'Code Crafting: Mastering Web Development',
                'meta_description' => 'Learn the art of web development with practical coding tips and best practices.',
            ],
            // Web Development Wonders: Tutorials and More
            [
                'title' => 'Web Development Wonders: Tutorials and More',
                'slug' => Str::slug('Web Development Wonders: Tutorials and More'),
                'thumbnail' => 'web-development-wonders.jpg',
                'short_text' => 'Explore a variety of web development tutorials and resources for all skill levels.',
                'long_text' => 'From beginner to advanced, this article covers essential web development topics...',
                'article_category_id' => $categories->skip(3)->first()->id,
                'is_active' => true,
                'meta_title' => 'Web Development Wonders: Tutorials and More',
                'meta_description' => 'Explore a variety of web development tutorials and resources for all skill levels.',
            ],
            [
                'title' => 'Travel Tales: Exploring the World One Destination at a Time',
                'slug' => Str::slug('Travel Tales: Exploring the World One Destination at a Time'),
                'thumbnail' => 'email-campaign-strategies.jpg',
                'short_text' => 'Join us on a journey to discover breathtaking destinations around the globe.',
                'long_text' => 'This article shares travel experiences, tips, and must-visit locations...',
                'article_category_id' => $categories->skip(4)->first()->id,
                'is_active' => true,
                'meta_title' => 'Travel Tales: Exploring the World One Destination at a Time',
                'meta_description' => 'Join us on a journey to discover breathtaking destinations around the globe.',
            ],
            [
                'title' => 'Lifestyle Lounge: Embracing a Balanced Life',
                'slug' => Str::slug('Lifestyle Lounge: Embracing a Balanced Life'),
                'thumbnail' => 'designers-hub-tips.jpg',
                'short_text' => 'Tips and insights on achieving a balanced and fulfilling lifestyle.',
                'long_text' => 'Explore various aspects of lifestyle, including health, wellness, and personal growth...',
                'article_category_id' => $categories->skip(5)->first()->id,
                'is_active' => true,
                'meta_title' => 'Lifestyle Lounge: Embracing a Balanced Life',
                'meta_description' => 'Tips and insights on achieving a balanced and fulfilling lifestyle.',
            ]



        ];


        // Creating articles for each category
        foreach ($articles as $article_data) {
            $article = Article::create($article_data);

            $article->tags()->attach($tags->random(3));
        }
    }
}
