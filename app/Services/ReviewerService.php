<?php

namespace App\Services;

use App\Contracts\Repositories\ReviewerRepositoryInterface;
use App\Models\Reviewer;
use Illuminate\Database\Eloquent\Collection;

class ReviewerService
{
    protected $reviewerRepository;

    /**
     * ReviewerService constructor.
     *
     * @param ReviewerRepositoryInterface $reviewerRepository
     */
    public function __construct(ReviewerRepositoryInterface $reviewerRepository)
    {
        $this->reviewerRepository = $reviewerRepository;
    }

    /**
     * Get all reviewers.
     *
     * @return Collection
     */
    public function getAllReviewers(): Collection
    {
        return $this->reviewerRepository->all();
    }

    /**
     * Store a new reviewer.
     *
     * @param array $data
     * @return Reviewer
     */
    public function storeReviewer(array $data): Reviewer
    {
        return $this->reviewerRepository->create($data);
    }

    /**
     * Update a reviewer.
     *
     * @param Reviewer $reviewer
     * @param array $data
     * @return bool
     */
    public function updateReviewer(Reviewer $reviewer, array $data): bool
    {
        return $this->reviewerRepository->update($reviewer->id, $data);
    }

    /**
     * Delete a reviewer.
     *
     * @param Reviewer $reviewer
     * @return bool
     */
    public function deleteReviewer(Reviewer $reviewer): bool
    {
        return $this->reviewerRepository->delete($reviewer->id);
    }
}
