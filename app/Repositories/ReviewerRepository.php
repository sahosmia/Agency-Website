<?php

namespace App\Repositories;

use App\Contracts\Repositories\ReviewerRepositoryInterface;
use App\Models\Reviewer;

class ReviewerRepository extends BaseRepository implements ReviewerRepositoryInterface
{
    /**
     * ReviewerRepository constructor.
     *
     * @param Reviewer $model
     */
    public function __construct(Reviewer $model)
    {
        parent::__construct($model);
    }
}
