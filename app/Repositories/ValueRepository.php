<?php

namespace App\Repositories;

use App\Contracts\Repositories\ValueRepositoryInterface;
use App\Models\Value;

class ValueRepository extends BaseRepository implements ValueRepositoryInterface
{
    /**
     * ValueRepository constructor.
     *
     * @param Value $model
     */
    public function __construct(Value $model)
    {
        parent::__construct($model);
    }
}
