<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVacancyCategoryRequest;
use App\Http\Requests\UpdateVacancyCategoryRequest;
use App\Models\VacancyCategory;

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

    public function store(StoreVacancyCategoryRequest $request)
    {
        VacancyCategory::create($request->validated());
        return redirect()->route('admin.vacancy-categories.index')->with('success', 'Vacancy category created successfully.');
    }

    public function edit(VacancyCategory $vacancyCategory)
    {
        return view('admin.vacancy-categories.edit', compact('vacancyCategory'));
    }

    public function update(UpdateVacancyCategoryRequest $request, VacancyCategory $vacancyCategory)
    {
        $vacancyCategory->update($request->validated());
        return redirect()->route('admin.vacancy-categories.index')->with('success', 'Vacancy category updated successfully.');
    }

    public function destroy(VacancyCategory $vacancyCategory)
    {
        $vacancyCategory->delete();
        return redirect()->route('admin.vacancy-categories.index')->with('success', 'Vacancy category deleted successfully.');
    }
}
