<?php

namespace App\Services;

use App\Contracts\Repositories\ServiceTypeRepositoryInterface;
use App\Models\ServiceType;
use Illuminate\Pagination\LengthAwarePaginator;

class ServiceTypeService
{
    protected $serviceTypeRepository;

    /**
     * ServiceTypeService constructor.
     *
     * @param ServiceTypeRepositoryInterface $serviceTypeRepository
     */
    public function __construct(ServiceTypeRepositoryInterface $serviceTypeRepository)
    {
        $this->serviceTypeRepository = $serviceTypeRepository;
    }

    /**
     * Get service types for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getServiceTypes(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->serviceTypeRepository->paginate($perPage, ['*'], ['service']);
    }

    /**
     * Store a new service type.
     *
     * @param array $data
     * @return ServiceType
     */
    public function storeServiceType(array $data): ServiceType
    {
        return $this->serviceTypeRepository->create($data);
    }

    /**
     * Update a service type.
     *
     * @param ServiceType $serviceType
     * @param array $data
     * @return bool
     */
    public function updateServiceType(ServiceType $serviceType, array $data): bool
    {
        return $this->serviceTypeRepository->update($serviceType->id, $data);
    }

    /**
     * Delete a service type.
     *
     * @param ServiceType $serviceType
     * @return bool
     */
    public function deleteServiceType(ServiceType $serviceType): bool
    {
        return $this->serviceTypeRepository->delete($serviceType->id);
    }
}
