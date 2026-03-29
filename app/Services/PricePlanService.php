<?php

namespace App\Services;

use App\Contracts\Repositories\PricePlanRepositoryInterface;
use App\Models\PricePlan;
use Illuminate\Pagination\LengthAwarePaginator;

class PricePlanService
{
    protected $pricePlanRepository;

    /**
     * PricePlanService constructor.
     *
     * @param PricePlanRepositoryInterface $pricePlanRepository
     */
    public function __construct(PricePlanRepositoryInterface $pricePlanRepository)
    {
        $this->pricePlanRepository = $pricePlanRepository;
    }

    /**
     * Get price plans for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getPricePlans(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->pricePlanRepository->paginate($perPage, ['*'], ['planable']);
    }

    /**
     * Store a new price plan.
     *
     * @param array $data
     * @return PricePlan
     */
    public function storePricePlan(array $data): PricePlan
    {
        $pricePlan = $this->pricePlanRepository->create($data);

        if (isset($data['features'])) {
            $features = [];
            foreach ($data['features'] as $featureId => $featureData) {
                if (isset($featureData['id'])) {
                    $features[$featureId] = ['is_active' => $featureData['is_active']];
                }
            }
            $pricePlan->features()->sync($features);
        }

        return $pricePlan;
    }

    /**
     * Update a price plan.
     *
     * @param PricePlan $pricePlan
     * @param array $data
     * @return bool
     */
    public function updatePricePlan(PricePlan $pricePlan, array $data): bool
    {
        $updated = $this->pricePlanRepository->update($pricePlan->id, $data);

        if ($updated) {
            if (isset($data['features'])) {
                $features = [];
                foreach ($data['features'] as $featureId => $featureData) {
                    if (isset($featureData['id'])) {
                        $features[$featureId] = ['is_active' => $featureData['is_active']];
                    }
                }
                $pricePlan->features()->sync($features);
            } else {
                $pricePlan->features()->sync([]);
            }
        }

        return $updated;
    }

    /**
     * Delete a price plan.
     *
     * @param PricePlan $pricePlan
     * @return bool
     */
    public function deletePricePlan(PricePlan $pricePlan): bool
    {
        return $this->pricePlanRepository->delete($pricePlan->id);
    }
}
