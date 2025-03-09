<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

class ArticleFrontController extends Controller
{
    public function index(Request $request)
    {
        $article_categories = ArticleCategory::get();

        $articles = Article::with('article_category:id,title')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('article_category_id', $request->category);
            })
            ->paginate(6);
        return view('frontend.articles.index', ['articles' => $articles, 'article_categories' => $article_categories]);
    }

    // Show
    public function show(Article $article)
    {
        $article->load('article_category:id,title');
        $articles = Article::with('article_category:id,title')->limit(5)->get();
        return view('frontend.articles.show', ['articles' => $articles, 'article' => $article]);
    }
}
