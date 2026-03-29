<?php

namespace App\Contracts\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;

interface ProjectRepositoryInterface extends RepositoryInterface
{
    /**
     * Get filtered projects for index page.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getFilteredProjects(array $filters, int $perPage): LengthAwarePaginator;
}
