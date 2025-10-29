<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        $applicants = JobApplication::with('vacancy')->latest()->get();
        return view('admin.applicants.index', compact('applicants'));
    }

    public function destroy(JobApplication $applicant)
    {
        $applicant->delete();
        return redirect()->route('admin.applicants.index')->with('success', 'Applicant deleted successfully!');
    }
}
