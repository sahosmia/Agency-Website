<?php

namespace App\Services;

use App\Contracts\Repositories\FeatureRepositoryInterface;
use App\Models\Feature;
use Illuminate\Pagination\LengthAwarePaginator;

class FeatureService
{
    protected $featureRepository;

    /**
     * FeatureService constructor.
     *
     * @param FeatureRepositoryInterface $featureRepository
     */
    public function __construct(FeatureRepositoryInterface $featureRepository)
    {
        $this->featureRepository = $featureRepository;
    }

    /**
     * Get features for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getFeatures(array $filters, int $perPage): LengthAwarePaginator
    {
        $query = Feature::query();
        if (!empty($filters['q'])) {
            $query->where('name', 'like', '%' . $filters['q'] . '%');
        }
        if (isset($filters['status']) && $filters['status'] !== '') {
            $query->where('is_active', $filters['status']);
        }
        return $query->latest()->paginate($perPage);
    }

    /**
     * Store a new feature.
     *
     * @param array $data
     * @return Feature
     */
    public function storeFeature(array $data): Feature
    {
        return $this->featureRepository->create($data);
    }

    /**
     * Update a feature.
     *
     * @param Feature $feature
     * @param array $data
     * @return bool
     */
    public function updateFeature(Feature $feature, array $data): bool
    {
        return $feature->update($data);
    }

    /**
     * Delete a feature.
     *
     * @param Feature $feature
     * @return bool
     */
    public function deleteFeature(Feature $feature): bool
    {
        return $feature->delete();
    }
}
