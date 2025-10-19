<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ArticleCategory;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:article_categories',
        ]);

        ArticleCategory::create($request->all());

        return redirect()->route('admin.article-categories.index')->with('success', 'Article category created successfully.');
    }

    public function edit(ArticleCategory $articleCategory)
    {
        return view('admin.article-categories.edit', compact('articleCategory'));
    }

    public function update(Request $request, ArticleCategory $articleCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:article_categories,slug,' . $articleCategory->id,
        ]);

        $articleCategory->update($request->all());

        return redirect()->route('admin.article-categories.index')->with('success', 'Article category updated successfully.');
    }

    public function destroy(ArticleCategory $articleCategory)
    {
        $articleCategory->delete();

        return redirect()->route('admin.article-categories.index')->with('success', 'Article category deleted successfully.');
    }
}
