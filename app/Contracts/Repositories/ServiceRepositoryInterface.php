<?php

namespace App\Contracts\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;

interface ServiceRepositoryInterface extends RepositoryInterface
{
    /**
     * Get filtered services for index page.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getFilteredServices(array $filters, int $perPage): LengthAwarePaginator;
}
