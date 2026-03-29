<?php

namespace App\Services;

use App\Contracts\Repositories\ArticleRepositoryInterface;
use App\Models\Article;
use Illuminate\Pagination\LengthAwarePaginator;

class ArticleService
{
    protected $articleRepository;

    /**
     * ArticleService constructor.
     *
     * @param ArticleRepositoryInterface $articleRepository
     */
    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * Get articles for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getArticles(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->articleRepository->getFilteredArticles($filters, $perPage);
    }

    /**
     * Store a new article.
     *
     * @param array $data
     * @return Article
     */
    public function storeArticle(array $data): Article
    {
        $article = $this->articleRepository->create($data);

        if (isset($data['tags'])) {
            $article->tags()->attach($data['tags']);
        }

        return $article;
    }

    /**
     * Update an article.
     *
     * @param Article $article
     * @param array $data
     * @return bool
     */
    public function updateArticle(Article $article, array $data): bool
    {
        $updated = $article->update($data);

        if ($updated && isset($data['tags'])) {
            $article->tags()->sync($data['tags']);
        }

        return $updated;
    }

    /**
     * Delete an article.
     *
     * @param Article $article
     * @return bool
     */
    public function deleteArticle(Article $article): bool
    {
        return $article->delete();
    }

    /**
     * Get article by ID with relations.
     *
     * @param int $id
     * @param array $relations
     * @return Article|null
     */
    public function getArticleById(int $id, array $relations = []): ?Article
    {
        return $this->articleRepository->find($id, ['*'], $relations);
    }
}
