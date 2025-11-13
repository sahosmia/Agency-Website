<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\AdminPagination;
use App\Http\Requests\StoreVacancyRequest;
use App\Http\Requests\UpdateVacancyRequest;
use App\Models\Vacancy;
use App\Models\Category;
use App\Traits\HandleIsActive;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    use AdminPagination, HandleIsActive;
    public function index(Request $request)
    {
        $adminPagination = $this->getAdminPagination();
        $categories = Category::all();
        $query = Vacancy::with('category');

        if ($request->filled('q')) {
            $query->where('title', 'like', '%' . $request->q . '%');
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $vacancies = $query->latest()->paginate($adminPagination);
        return view('admin.vacancies.index', compact('vacancies', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.vacancies.create', compact('categories'));
    }

    public function store(StoreVacancyRequest $request)
    {
        $data = $request->validated();
        $this->handleIsActive($request, $data);
        Vacancy::create($data);
        return redirect()->route('admin.vacancies.index')->with('success', 'Vacancy created successfully.');
    }

    public function show(Vacancy $vacancy)
    {
        return view('admin.vacancies.show', compact('vacancy'));
    }

    public function edit(Vacancy $vacancy)
    {
        $categories = Category::all();
        return view('admin.vacancies.edit', compact('vacancy', 'categories'));
    }

    public function update(UpdateVacancyRequest $request, Vacancy $vacancy)
    {
        $data = $request->validated();
        $this->handleIsActive($request, $data);
        $vacancy->update($data);
        return redirect()->route('admin.vacancies.index')->with('success', 'Vacancy updated successfully.');
    }

    public function destroy(Vacancy $vacancy)
    {
        $vacancy->delete();
        return redirect()->route('admin.vacancies.index')->with('success', 'Vacancy deleted successfully!');
    }
}
