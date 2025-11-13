<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\AdminPagination;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Traits\HandleIsActive;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;

class ArticleController extends Controller
{
    use FileUploadTrait, AdminPagination, HandleIsActive;

    public function index(Request $request)
    {
        $adminPagination = $this->getAdminPagination();
        $categories = Category::all();
        $query = Article::with('category');

        if ($request->filled('q')) {
            $query->where('title', 'like', '%' . $request->q . '%');
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $articles = $query->latest()->paginate($adminPagination);

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
        $data = $this->handleIsActive($request, $request->validated());
        $data['thumbnail'] = $this->uploadFile($request, 'thumbnail', 'articles');
        $article = Article::create($data);
        $article->tags()->attach($request->tags);
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
        $data = $this->handleIsActive($request, $request->validated());
        $data['thumbnail'] = $this->updateFile($request, 'thumbnail', 'articles', $article);
        $article->update($data);
        $article->tags()->sync($request->tags);
        return redirect()->route('admin.articles.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Article $article)
    {
        $this->deleteFile($article, 'thumbnail');
        $article->delete();
        return redirect()->route('admin.articles.index')->with('success', 'Article deleted successfully.');
    }
}
