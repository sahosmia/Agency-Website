<?php

namespace App\Repositories;

use App\Contracts\Repositories\AchievementRepositoryInterface;
use App\Models\Achievement;

class AchievementRepository extends BaseRepository implements AchievementRepositoryInterface
{
    /**
     * AchievementRepository constructor.
     *
     * @param Achievement $model
     */
    public function __construct(Achievement $model)
    {
        parent::__construct($model);
    }
}
