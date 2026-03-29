<?php

namespace App\Repositories;

use App\Contracts\Repositories\FaqRepositoryInterface;
use App\Models\Faq;

class FaqRepository extends BaseRepository implements FaqRepositoryInterface
{
    /**
     * FaqRepository constructor.
     *
     * @param Faq $model
     */
    public function __construct(Faq $model)
    {
        parent::__construct($model);
    }
}
