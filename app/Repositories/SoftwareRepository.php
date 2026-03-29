<?php

namespace App\Repositories;

use App\Contracts\Repositories\SoftwareRepositoryInterface;
use App\Models\Software;
use Illuminate\Pagination\LengthAwarePaginator;

class SoftwareRepository extends BaseRepository implements SoftwareRepositoryInterface
{
    /**
     * SoftwareRepository constructor.
     *
     * @param Software $model
     */
    public function __construct(Software $model)
    {
        parent::__construct($model);
    }

    /**
     * @inheritdoc
     */
    public function getFilteredSoftwares(array $filters, int $perPage): LengthAwarePaginator
    {
        $query = $this->model->with('category');

        if (!empty($filters['q'])) {
            $query->where('name', 'like', '%' . $filters['q'] . '%');
        }

        if (!empty($filters['category_id'])) {
            $query->where('category_id', $filters['category_id']);
        }

        if (isset($filters['status']) && $filters['status'] !== '') {
            $query->where('is_active', $filters['status']);
        }

        return $query->latest()->paginate($perPage);
    }
}
