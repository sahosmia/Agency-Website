<?php

namespace App\Services;

use App\Contracts\Repositories\TagRepositoryInterface;
use App\Models\Tag;
use Illuminate\Pagination\LengthAwarePaginator;

class TagService
{
    protected $tagRepository;

    /**
     * TagService constructor.
     *
     * @param TagRepositoryInterface $tagRepository
     */
    public function __construct(TagRepositoryInterface $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    /**
     * Get tags for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getTags(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->tagRepository->paginate($perPage);
    }

    /**
     * Store a new tag.
     *
     * @param array $data
     * @return Tag
     */
    public function storeTag(array $data): Tag
    {
        return $this->tagRepository->create($data);
    }

    /**
     * Update a tag.
     *
     * @param Tag $tag
     * @param array $data
     * @return bool
     */
    public function updateTag(Tag $tag, array $data): bool
    {
        return $this->tagRepository->update($tag->id, $data);
    }

    /**
     * Delete a tag.
     *
     * @param Tag $tag
     * @return bool
     */
    public function deleteTag(Tag $tag): bool
    {
        return $this->tagRepository->delete($tag->id);
    }
}
