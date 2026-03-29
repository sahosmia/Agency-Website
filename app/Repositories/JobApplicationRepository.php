<?php

namespace App\Repositories;

use App\Contracts\Repositories\JobApplicationRepositoryInterface;
use App\Models\JobApplication;

class JobApplicationRepository extends BaseRepository implements JobApplicationRepositoryInterface
{
    /**
     * JobApplicationRepository constructor.
     *
     * @param JobApplication $model
     */
    public function __construct(JobApplication $model)
    {
        parent::__construct($model);
    }
}
