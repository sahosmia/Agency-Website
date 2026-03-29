<?php

namespace App\Repositories;

use App\Contracts\Repositories\FeatureRepositoryInterface;
use App\Models\Feature;

class FeatureRepository extends BaseRepository implements FeatureRepositoryInterface
{
    /**
     * FeatureRepository constructor.
     *
     * @param Feature $model
     */
    public function __construct(Feature $model)
    {
        parent::__construct($model);
    }
}
