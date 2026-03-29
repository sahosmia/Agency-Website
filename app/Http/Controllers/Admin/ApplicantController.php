<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use App\Services\JobApplicationService;

class ApplicantController extends Controller
{
    protected $jobApplicationService;

    public function __construct(JobApplicationService $jobApplicationService)
    {
        $this->jobApplicationService = $jobApplicationService;
    }

    public function index()
    {
        $applicants = $this->jobApplicationService->getAllApplications();
        return view('admin.applicants.index', compact('applicants'));
    }

    public function destroy(JobApplication $applicant)
    {
        $this->jobApplicationService->deleteApplication($applicant);
        return redirect()->route('admin.applicants.index')->with('success', 'Applicant deleted successfully!');
    }
}
