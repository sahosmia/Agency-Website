<?php

namespace App\Repositories;

use App\Contracts\Repositories\MenuRepositoryInterface;
use App\Models\Menu;

class MenuRepository extends BaseRepository implements MenuRepositoryInterface
{
    /**
     * MenuRepository constructor.
     *
     * @param Menu $model
     */
    public function __construct(Menu $model)
    {
        parent::__construct($model);
    }
}
