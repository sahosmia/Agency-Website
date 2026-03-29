<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\AdminPagination;
use App\Http\Requests\StoreVacancyRequest;
use App\Http\Requests\UpdateVacancyRequest;
use App\Models\Vacancy;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\VacancyService;

class VacancyController extends Controller
{
    use AdminPagination;

    protected $vacancyService;

    public function __construct(VacancyService $vacancyService)
    {
        $this->vacancyService = $vacancyService;
    }

    public function index(Request $request)
    {
        $adminPagination = $this->getAdminPagination();
        $categories = Category::all();
        $vacancies = $this->vacancyService->getVacancies($request->all(), $adminPagination);

        return view('admin.vacancies.index', compact('vacancies', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.vacancies.create', compact('categories'));
    }

    public function store(StoreVacancyRequest $request)
    {
        $this->vacancyService->storeVacancy($request->validated());
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
        $this->vacancyService->updateVacancy($vacancy, $request->validated());
        return redirect()->route('admin.vacancies.index')->with('success', 'Vacancy updated successfully.');
    }

    public function destroy(Vacancy $vacancy)
    {
        $this->vacancyService->deleteVacancy($vacancy);
        return redirect()->route('admin.vacancies.index')->with('success', 'Vacancy deleted successfully!');
    }
}
