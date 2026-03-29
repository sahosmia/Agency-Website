<?php

namespace App\Repositories;

use App\Contracts\Repositories\WorkingProcessRepositoryInterface;
use App\Models\WorkingProcess;

class WorkingProcessRepository extends BaseRepository implements WorkingProcessRepositoryInterface
{
    /**
     * WorkingProcessRepository constructor.
     *
     * @param WorkingProcess $model
     */
    public function __construct(WorkingProcess $model)
    {
        parent::__construct($model);
    }
}
