<?php

namespace App\Services;

use App\Contracts\Repositories\TechnologyRepositoryInterface;
use App\Models\Technology;
use Illuminate\Pagination\LengthAwarePaginator;

class TechnologyService
{
    protected $technologyRepository;

    /**
     * TechnologyService constructor.
     *
     * @param TechnologyRepositoryInterface $technologyRepository
     */
    public function __construct(TechnologyRepositoryInterface $technologyRepository)
    {
        $this->technologyRepository = $technologyRepository;
    }

    /**
     * Get technologies for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getTechnologies(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->technologyRepository->paginate($perPage);
    }

    /**
     * Store a new technology.
     *
     * @param array $data
     * @return Technology
     */
    public function storeTechnology(array $data): Technology
    {
        return $this->technologyRepository->create($data);
    }

    /**
     * Update a technology.
     *
     * @param Technology $technology
     * @param array $data
     * @return bool
     */
    public function updateTechnology(Technology $technology, array $data): bool
    {
        return $this->technologyRepository->update($technology->id, $data);
    }

    /**
     * Delete a technology.
     *
     * @param Technology $technology
     * @return bool
     */
    public function deleteTechnology(Technology $technology): bool
    {
        return $this->technologyRepository->delete($technology->id);
    }
}
