<?php

namespace App\Contracts\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;

interface VacancyRepositoryInterface extends RepositoryInterface
{
    /**
     * Get filtered vacancies for index page.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getFilteredVacancies(array $filters, int $perPage): LengthAwarePaginator;
}
