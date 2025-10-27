<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PageSetting;
use App\Models\Vacancy;
use App\Models\VacancyCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CareerFrontController extends Controller
{
    // index
    public function index(Request $request)
    {
        $vacancy_categories = VacancyCategory::get();

        $vacancies = Vacancy::with('vacancy_category:id,title')
            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%'.$request->search.'%');
            })
            ->when($request->category, function ($query) use ($request) {
                $query->where('vacancy_category_id', $request->category);
            })
            ->paginate(6);

        $careersPage = PageSetting::where('page_name', 'careers')->first();
        $careersSettings = $careersPage ? $careersPage->settings : [];

        return view('frontend.careers.index', ['vacancies' => $vacancies, 'vacancy_categories' => $vacancy_categories, 'careersSettings' => $careersSettings]);
    }

    // Show
    public function show($career)
    {
        $careerD = Vacancy::where('slug', $career)->first();

        if (! $careerD) {
            return response()->view('errors.careers-not-found', [], 404);
        }
        $careerD->load('vacancy_category:id,title');

        return view('frontend.careers.show', ['vacancy' => $careerD]);
    }

    public function apply($slug)
    {
        return view('frontend.careers.apply', ['slug' => $slug]);
    }

    public function apply_submit(Request $request, $slug)
    {
        if ($request->step == 1) {
            // Store the first form's data in session
            Session::put('job_application', [
                'name' => $request->name,
                'email' => $request->email,
            ]);

            // return redirect()->back()->with('message', 'Basic Info Saved! Proceed to Next Step.');
            return view('frontend.careers.apply-question', ['slug' => $slug]);
        }
        if ($request->step == 2) {
            // Retrieve session data and merge with second form data
            $jobApplication = Session::get('job_application', []);
            $jobApplication['experience'] = $request->experience;
            $jobApplication['why_hire'] = $request->why_hire;

            return $jobApplication;
            // Save to database (Example)
            // \DB::table('job_applications')->insert($jobApplication);

            // Clear session after submission
            Session::forget('job_application');

            // return redirect()->back()->with('message', 'Application Submitted Successfully!');
        }

        return back()->with('error', 'Invalid Step!');
    }
}
