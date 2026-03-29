<?php

namespace App\Services;

use App\Contracts\Repositories\VacancyRepositoryInterface;
use App\Models\Vacancy;
use Illuminate\Pagination\LengthAwarePaginator;

class VacancyService
{
    protected $vacancyRepository;

    /**
     * VacancyService constructor.
     *
     * @param VacancyRepositoryInterface $vacancyRepository
     */
    public function __construct(VacancyRepositoryInterface $vacancyRepository)
    {
        $this->vacancyRepository = $vacancyRepository;
    }

    /**
     * Get vacancies for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getVacancies(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->vacancyRepository->getFilteredVacancies($filters, $perPage);
    }

    /**
     * Store a new vacancy.
     *
     * @param array $validatedData
     * @return Vacancy
     */
    public function storeVacancy(array $validatedData): Vacancy
    {
        return $this->vacancyRepository->create($validatedData);
    }

    /**
     * Update a vacancy.
     *
     * @param Vacancy $vacancy
     * @param array $validatedData
     * @return bool
     */
    public function updateVacancy(Vacancy $vacancy, array $validatedData): bool
    {
        return $vacancy->update($validatedData);
    }

    /**
     * Delete a vacancy.
     *
     * @param Vacancy $vacancy
     * @return bool
     */
    public function deleteVacancy(Vacancy $vacancy): bool
    {
        return $vacancy->delete();
    }
}
