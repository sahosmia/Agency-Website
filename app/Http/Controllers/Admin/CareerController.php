<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        return 'Dashboard';
    }

    public function create()
    {
        return view('admin.careers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'skills' => 'required|array',
            'skills.*' => 'string|max:255', // Validate each skill
        ]);

        Vacancy::create([
            'title' => $request->title,
            'description' => $request->description,
            'skills_required' => json_encode($request->skills), // Convert array to JSON
        ]);

        return redirect()->route('careers.create')->with('success', 'Career added successfully!');
    }
}
