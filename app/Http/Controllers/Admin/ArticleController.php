<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\AdminPagination;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Services\ArticleService;
use App\Http\Controllers\Traits\FileUploadTrait;

class ArticleController extends Controller
{
    use AdminPagination, FileUploadTrait;

    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
        $this->articleService = $articleService;
    }

    public function index(Request $request)
    {
        $adminPagination = $this->getAdminPagination();
        $categories = Category::all();
        $articles = $this->articleService->getArticles($request->all(), $adminPagination);

        return view('admin.articles.index', compact('articles', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.articles.create', compact('categories', 'tags'));
    }

    public function store(StoreArticleRequest $request)
    {
        $data = $request->validated();
        $data['thumbnail'] = $this->uploadFile($request, 'thumbnail', 'articles');
        $data['tags'] = $request->tags;

        $this->articleService->storeArticle($data);
        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully.');
    }

    public function show(Article $article)
    {
        $article->load('tags');
        return view('admin.articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $article->load('tags');
        return view('admin.articles.edit', compact('article', 'categories', 'tags'));
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        $data = $request->validated();
        $data['thumbnail'] = $this->updateFile($request, 'thumbnail', 'articles', $article);
        $data['tags'] = $request->tags;

        $this->articleService->updateArticle($article, $data);
        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $this->deleteFile($article, 'thumbnail');
        $this->articleService->deleteArticle($article);
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }
}
