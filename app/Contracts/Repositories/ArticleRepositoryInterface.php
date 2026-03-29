<?php

namespace App\Contracts\Repositories;

use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

interface ArticleRepositoryInterface extends RepositoryInterface
{
    /**
     * Get filtered articles for index page.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getFilteredArticles(array $filters, int $perPage): LengthAwarePaginator;
}
