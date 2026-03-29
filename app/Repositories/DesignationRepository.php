<?php

namespace App\Repositories;

use App\Contracts\Repositories\DesignationRepositoryInterface;
use App\Models\Designation;

class DesignationRepository extends BaseRepository implements DesignationRepositoryInterface
{
    /**
     * DesignationRepository constructor.
     *
     * @param Designation $model
     */
    public function __construct(Designation $model)
    {
        parent::__construct($model);
    }
}
