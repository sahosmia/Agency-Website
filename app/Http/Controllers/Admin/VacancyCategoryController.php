<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VacancyCategory;
use Illuminate\Http\Request;

class VacancyCategoryController extends Controller
{
    public function index()
    {
        $vacancyCategories = VacancyCategory::all();
        return view('admin.vacancy-categories.index', compact('vacancyCategories'));
    }

    public function create()
    {
        return view('admin.vacancy-categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:vacancy_categories',
        ]);

        VacancyCategory::create($request->all());

        return redirect()->route('admin.vacancy-categories.index')->with('success', 'Vacancy category created successfully.');
    }

    public function edit(VacancyCategory $vacancyCategory)
    {
        return view('admin.vacancy-categories.edit', compact('vacancyCategory'));
    }

    public function update(Request $request, VacancyCategory $vacancyCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:vacancy_categories,slug,' . $vacancyCategory->id,
        ]);

        $vacancyCategory->update($request->all());

        return redirect()->route('admin.vacancy-categories.index')->with('success', 'Vacancy category updated successfully.');
    }

    public function destroy(VacancyCategory $vacancyCategory)
    {
        $vacancyCategory->delete();

        return redirect()->route('admin.vacancy-categories.index')->with('success', 'Vacancy category deleted successfully.');
    }
}
