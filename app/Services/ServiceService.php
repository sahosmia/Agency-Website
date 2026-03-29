<?php

namespace App\Services;

use App\Contracts\Repositories\ServiceRepositoryInterface;
use App\Models\Service;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class ServiceService
{
    protected $serviceRepository;

    /**
     * ServiceService constructor.
     *
     * @param ServiceRepositoryInterface $serviceRepository
     */
    public function __construct(ServiceRepositoryInterface $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    /**
     * Get services for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getServices(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->serviceRepository->getFilteredServices($filters, $perPage);
    }

    /**
     * Store a new service.
     *
     * @param array $data
     * @return Service
     */
    public function storeService(array $data): Service
    {
        return DB::transaction(function () use ($data) {
            $service = $this->serviceRepository->create($data);

            if (isset($data['faqs'])) {
                $service->faqs()->createMany($data['faqs']);
            }

            return $service;
        });
    }

    /**
     * Update a service.
     *
     * @param Service $service
     * @param array $data
     * @return bool
     */
    public function updateService(Service $service, array $data): bool
    {
        return DB::transaction(function () use ($service, $data) {
            $updated = $service->update($data);

            if ($updated && isset($data['faqs'])) {
                $service->faqs()->delete();
                $service->faqs()->createMany($data['faqs']);
            }

            return $updated;
        });
    }

    /**
     * Delete a service.
     *
     * @param Service $service
     * @return bool
     */
    public function deleteService(Service $service): bool
    {
        return $service->delete();
    }
}
