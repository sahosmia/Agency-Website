<?php

namespace App\Services;

use App\Contracts\Repositories\ClientReviewRepositoryInterface;
use App\Models\ClientReview;
use Illuminate\Pagination\LengthAwarePaginator;

class ClientReviewService
{
    protected $clientReviewRepository;

    /**
     * ClientReviewService constructor.
     *
     * @param ClientReviewRepositoryInterface $clientReviewRepository
     */
    public function __construct(ClientReviewRepositoryInterface $clientReviewRepository)
    {
        $this->clientReviewRepository = $clientReviewRepository;
    }

    /**
     * Get client reviews for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getClientReviews(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->clientReviewRepository->paginate($perPage);
    }

    /**
     * Store a new client review.
     *
     * @param array $data
     * @return ClientReview
     */
    public function storeClientReview(array $data): ClientReview
    {
        $clientReview = $this->clientReviewRepository->create($data);

        if (isset($data['reviewable_type'])) {
            $clientReview->reviewable_id = $data['reviewable_id'];
            $clientReview->reviewable_type = $data['reviewable_type'];
            $clientReview->save();
        }

        return $clientReview;
    }

    /**
     * Update a client review.
     *
     * @param ClientReview $clientReview
     * @param array $data
     * @return bool
     */
    public function updateClientReview(ClientReview $clientReview, array $data): bool
    {
        $updated = $this->clientReviewRepository->update($clientReview->id, $data);

        if ($updated) {
            if (isset($data['reviewable_type'])) {
                $clientReview->reviewable_id = $data['reviewable_id'];
                $clientReview->reviewable_type = $data['reviewable_type'];
            } else {
                $clientReview->reviewable_id = null;
                $clientReview->reviewable_type = null;
            }
            $clientReview->save();
        }

        return $updated;
    }

    /**
     * Delete a client review.
     *
     * @param ClientReview $clientReview
     * @return bool
     */
    public function deleteClientReview(ClientReview $clientReview): bool
    {
        return $this->clientReviewRepository->delete($clientReview->id);
    }
}
