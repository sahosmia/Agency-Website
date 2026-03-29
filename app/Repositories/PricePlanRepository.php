<?php

namespace App\Repositories;

use App\Contracts\Repositories\PricePlanRepositoryInterface;
use App\Models\PricePlan;

class PricePlanRepository extends BaseRepository implements PricePlanRepositoryInterface
{
    /**
     * PricePlanRepository constructor.
     *
     * @param PricePlan $model
     */
    public function __construct(PricePlan $model)
    {
        parent::__construct($model);
    }
}
