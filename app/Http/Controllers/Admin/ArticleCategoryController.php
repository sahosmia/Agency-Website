<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleCategoryRequest;
use App\Http\Requests\UpdateArticleCategoryRequest;
use App\Models\ArticleCategory;

class ArticleCategoryController extends Controller
{
    public function index()
    {
        $articleCategories = ArticleCategory::all();
        return view('admin.article-categories.index', compact('articleCategories'));
    }

    public function create()
    {
        return view('admin.article-categories.create');
    }

    public function store(StoreArticleCategoryRequest $request)
    {
        ArticleCategory::create($request->validated());
        return redirect()->route('admin.article-categories.index')->with('success', 'Article category created successfully.');
    }

    public function edit(ArticleCategory $articleCategory)
    {
        return view('admin.article-categories.edit', compact('articleCategory'));
    }

    public function update(UpdateArticleCategoryRequest $request, ArticleCategory $articleCategory)
    {
        $articleCategory->update($request->validated());
        return redirect()->route('admin.article-categories.index')->with('success', 'Article category updated successfully.');
    }

    public function destroy(ArticleCategory $articleCategory)
    {
        $articleCategory->delete();
        return redirect()->route('admin.article-categories.index')->with('success', 'Article category deleted successfully.');
    }
}
