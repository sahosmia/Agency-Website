<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVacancyRequest;
use App\Http\Requests\UpdateVacancyRequest;
use App\Models\Vacancy;
use App\Models\VacancyCategory;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::with('vacancy_category')->get();
        return view('admin.vacancies.index', compact('vacancies'));
    }

    public function create()
    {
        $categories = VacancyCategory::all();
        return view('admin.vacancies.create', compact('categories'));
    }

    public function store(StoreVacancyRequest $request)
    {
        Vacancy::create($request->validated());
        return redirect()->route('admin.vacancies.index')->with('success', 'Vacancy created successfully.');
    }

    public function edit(Vacancy $vacancy)
    {
        $categories = VacancyCategory::all();
        return view('admin.vacancies.edit', compact('vacancy', 'categories'));
    }

    public function update(UpdateVacancyRequest $request, Vacancy $vacancy)
    {
        $vacancy->update($request->validated());
        return redirect()->route('admin.vacancies.index')->with('success', 'Vacancy updated successfully.');
    }

    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();
        return redirect()->route('admin.vacancies.index')->with('success', 'Vacancy deleted successfully!');
    }
}
