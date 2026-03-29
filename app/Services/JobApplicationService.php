<?php

namespace App\Services;

use App\Contracts\Repositories\JobApplicationRepositoryInterface;
use App\Models\JobApplication;

class JobApplicationService
{
    protected $jobApplicationRepository;

    /**
     * JobApplicationService constructor.
     *
     * @param JobApplicationRepositoryInterface $jobApplicationRepository
     */
    public function __construct(JobApplicationRepositoryInterface $jobApplicationRepository)
    {
        $this->jobApplicationRepository = $jobApplicationRepository;
    }

    /**
     * Get all job applications.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllApplications()
    {
        return $this->jobApplicationRepository->all(['*'], ['vacancy']);
    }

    /**
     * Delete a job application.
     *
     * @param JobApplication $jobApplication
     * @return bool
     */
    public function deleteApplication(JobApplication $jobApplication): bool
    {
        return $this->jobApplicationRepository->delete($jobApplication->id);
    }
}
