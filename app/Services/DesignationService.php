<?php

namespace App\Services;

use App\Contracts\Repositories\DesignationRepositoryInterface;
use App\Models\Designation;
use Illuminate\Pagination\LengthAwarePaginator;

class DesignationService
{
    protected $designationRepository;

    /**
     * DesignationService constructor.
     *
     * @param DesignationRepositoryInterface $designationRepository
     */
    public function __construct(DesignationRepositoryInterface $designationRepository)
    {
        $this->designationRepository = $designationRepository;
    }

    /**
     * Get designations for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getDesignations(array $filters, int $perPage): LengthAwarePaginator
    {
        $query = Designation::query();
        if (!empty($filters['q'])) {
            $query->where('title', 'like', "%{$filters['q']}%");
        }
        return $query->latest()->paginate($perPage);
    }

    /**
     * Store a new designation.
     *
     * @param array $data
     * @return Designation
     */
    public function storeDesignation(array $data): Designation
    {
        return $this->designationRepository->create($data);
    }

    /**
     * Update a designation.
     *
     * @param Designation $designation
     * @param array $data
     * @return bool
     */
    public function updateDesignation(Designation $designation, array $data): bool
    {
        return $designation->update($data);
    }

    /**
     * Delete a designation.
     *
     * @param Designation $designation
     * @return bool
     */
    public function deleteDesignation(Designation $designation): bool
    {
        return $designation->delete();
    }
}
