<?php

namespace App\Repositories;

use App\Contracts\Repositories\ServiceTypeRepositoryInterface;
use App\Models\ServiceType;

class ServiceTypeRepository extends BaseRepository implements ServiceTypeRepositoryInterface
{
    /**
     * ServiceTypeRepository constructor.
     *
     * @param ServiceType $model
     */
    public function __construct(ServiceType $model)
    {
        parent::__construct($model);
    }
}
