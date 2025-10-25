<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Http\Controllers\Traits\FileUploadTrait;

class ArticleController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        $articles = Article::with('article_category')->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $categories = ArticleCategory::all();
        return view('admin.articles.create', compact('categories'));
    }

    public function store(StoreArticleRequest $request)
    {
        $data = $request->validated();
        $data['thumbnail'] = $this->uploadFile($request, 'thumbnail', 'articles');
        Article::create($data);
        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully.');
    }

    public function edit(Article $article)
    {
        $categories = ArticleCategory::all();
        return view('admin.articles.edit', compact('article', 'categories'));
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        $data = $request->validated();
        $data['thumbnail'] = $this->updateFile($request, 'thumbnail', 'articles', $article);
        $article->update($data);
        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $this->deleteFile($article, 'thumbnail');
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }
}
