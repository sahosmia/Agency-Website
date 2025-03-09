<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\Vacancy;
use App\Models\VacancyCategory;
use Illuminate\Http\Request;

class CareerFrontController extends Controller
{
    //index
    public function index(Request $request)
    {
        $vacancy_categories = VacancyCategory::get();

        $vacancies = Vacancy::with('vacancy_category:id,title')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('vacancy_category_id', $request->category);
            })
            ->paginate(6);
        return view('frontend.careers.index', ['vacancies' => $vacancies, 'vacancy_categories' => $vacancy_categories]);
    }

    // Show
    public function show(Vacancy $career)
    {
        $career->load('vacancy_category:id,title');
        return view('frontend.careers.show', ['vacancy' => $career]);
    }
}
