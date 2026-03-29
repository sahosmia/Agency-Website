<?php

namespace App\Services;

use App\Contracts\Repositories\KeyFeatureRepositoryInterface;
use App\Models\KeyFeature;
use Illuminate\Pagination\LengthAwarePaginator;

class KeyFeatureService
{
    protected $keyFeatureRepository;

    /**
     * KeyFeatureService constructor.
     *
     * @param KeyFeatureRepositoryInterface $keyFeatureRepository
     */
    public function __construct(KeyFeatureRepositoryInterface $keyFeatureRepository)
    {
        $this->keyFeatureRepository = $keyFeatureRepository;
    }

    /**
     * Get key features for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getKeyFeatures(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->keyFeatureRepository->paginate($perPage);
    }

    /**
     * Store a new key feature.
     *
     * @param array $data
     * @return KeyFeature
     */
    public function storeKeyFeature(array $data): KeyFeature
    {
        return $this->keyFeatureRepository->create($data);
    }

    /**
     * Update a key feature.
     *
     * @param KeyFeature $keyFeature
     * @param array $data
     * @return bool
     */
    public function updateKeyFeature(KeyFeature $keyFeature, array $data): bool
    {
        return $this->keyFeatureRepository->update($keyFeature->id, $data);
    }

    /**
     * Delete a key feature.
     *
     * @param KeyFeature $keyFeature
     * @return bool
     */
    public function deleteKeyFeature(KeyFeature $keyFeature): bool
    {
        return $this->keyFeatureRepository->delete($keyFeature->id);
    }
}
