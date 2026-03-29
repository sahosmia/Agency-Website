<?php

namespace App\Repositories;

use App\Contracts\Repositories\ClientReviewRepositoryInterface;
use App\Models\ClientReview;

class ClientReviewRepository extends BaseRepository implements ClientReviewRepositoryInterface
{
    /**
     * ClientReviewRepository constructor.
     *
     * @param ClientReview $model
     */
    public function __construct(ClientReview $model)
    {
        parent::__construct($model);
    }
}
