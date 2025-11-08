<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use App\Models\Vacancy;

class DashboardController extends Controller
{
    public function index()
    {
        $data['services'] = Service::count();
        $data['projects'] = Project::count();
        $data['articles'] = Article::count();
        $data['clients'] = Client::count();
        $data['teams'] = Team::count();
        $data['vacancies'] = Vacancy::count();

        return view('admin.dashboard', $data);
    }
}
