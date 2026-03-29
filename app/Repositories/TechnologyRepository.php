<?php

namespace App\Repositories;

use App\Contracts\Repositories\TechnologyRepositoryInterface;
use App\Models\Technology;

class TechnologyRepository extends BaseRepository implements TechnologyRepositoryInterface
{
    /**
     * TechnologyRepository constructor.
     *
     * @param Technology $model
     */
    public function __construct(Technology $model)
    {
        parent::__construct($model);
    }
}
