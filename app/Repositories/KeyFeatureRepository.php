<?php

namespace App\Repositories;

use App\Contracts\Repositories\KeyFeatureRepositoryInterface;
use App\Models\KeyFeature;

class KeyFeatureRepository extends BaseRepository implements KeyFeatureRepositoryInterface
{
    /**
     * KeyFeatureRepository constructor.
     *
     * @param KeyFeature $model
     */
    public function __construct(KeyFeature $model)
    {
        parent::__construct($model);
    }
}
