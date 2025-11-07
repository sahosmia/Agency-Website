<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVacancyRequest;
use App\Http\Requests\UpdateVacancyRequest;
use App\Models\Vacancy;
use App\Models\VacancyCategory;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index(Request $request)
    {
        $categories = VacancyCategory::all();
        $query = Vacancy::with('vacancy_category');

        if ($request->filled('q')) {
            $query->where('title', 'like', '%' . $request->q . '%');
        }

        if ($request->filled('category_id')) {
            $query->where('vacancy_category_id', $request->category_id);
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $vacancies = $query->latest()->paginate(10);
        return view('admin.vacancies.index', compact('vacancies', 'categories'));
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

    public function show(Vacancy $vacancy)
    {
        return view('admin.vacancies.show', compact('vacancy'));
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
