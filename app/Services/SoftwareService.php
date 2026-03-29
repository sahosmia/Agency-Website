<?php

namespace App\Services;

use App\Contracts\Repositories\SoftwareRepositoryInterface;
use App\Models\Software;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class SoftwareService
{
    protected $softwareRepository;

    /**
     * SoftwareService constructor.
     *
     * @param SoftwareRepositoryInterface $softwareRepository
     */
    public function __construct(SoftwareRepositoryInterface $softwareRepository)
    {
        $this->softwareRepository = $softwareRepository;
    }

    /**
     * Get softwares for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getSoftwares(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->softwareRepository->getFilteredSoftwares($filters, $perPage);
    }

    /**
     * Store a new software.
     *
     * @param array $data
     * @return Software
     */
    public function storeSoftware(array $data): Software
    {
        return DB::transaction(function () use ($data) {
            $software = $this->softwareRepository->create($data);

            if (isset($data['faqs'])) {
                $software->faqs()->createMany($data['faqs']);
            }

            return $software;
        });
    }

    /**
     * Update a software.
     *
     * @param Software $software
     * @param array $data
     * @return bool
     */
    public function updateSoftware(Software $software, array $data): bool
    {
        return DB::transaction(function () use ($software, $data) {
            $updated = $software->update($data);

            if ($updated && isset($data['faqs'])) {
                $software->faqs()->delete();
                $software->faqs()->createMany($data['faqs']);
            }

            return $updated;
        });
    }

    /**
     * Delete a software.
     *
     * @param Software $software
     * @return bool
     */
    public function deleteSoftware(Software $software): bool
    {
        return $software->delete();
    }
}
