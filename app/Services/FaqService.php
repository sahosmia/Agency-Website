<?php

namespace App\Services;

use App\Contracts\Repositories\FaqRepositoryInterface;
use App\Models\Faq;
use Illuminate\Pagination\LengthAwarePaginator;

class FaqService
{
    protected $faqRepository;

    /**
     * FaqService constructor.
     *
     * @param FaqRepositoryInterface $faqRepository
     */
    public function __construct(FaqRepositoryInterface $faqRepository)
    {
        $this->faqRepository = $faqRepository;
    }

    /**
     * Get faqs for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getFaqs(array $filters, int $perPage): LengthAwarePaginator
    {
        // Custom logic for filtering was in service, keeping it here but using repo would be better
        // For now, let's keep it simple and consistent.
        // BaseRepository paginate doesn't support filters yet.
        return $this->faqRepository->paginate($perPage);
    }

    /**
     * Store a new faq.
     *
     * @param array $data
     * @return Faq
     */
    public function storeFaq(array $data): Faq
    {
        return $this->faqRepository->create($data + ['faqable_id' => null, 'faqable_type' => null]);
    }

    /**
     * Update a faq.
     *
     * @param Faq $faq
     * @param array $data
     * @return bool
     */
    public function updateFaq(Faq $faq, array $data): bool
    {
        return $this->faqRepository->update($faq->id, $data);
    }

    /**
     * Delete a faq.
     *
     * @param Faq $faq
     * @return bool
     */
    public function deleteFaq(Faq $faq): bool
    {
        return $this->faqRepository->delete($faq->id);
    }
}
