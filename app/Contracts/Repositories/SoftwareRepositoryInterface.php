<?php

namespace App\Contracts\Repositories;

use Illuminate\Pagination\LengthAwarePaginator;

interface SoftwareRepositoryInterface extends RepositoryInterface
{
    /**
     * Get filtered softwares for index page.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getFilteredSoftwares(array $filters, int $perPage): LengthAwarePaginator;
}
