<?php

namespace App\Services;

use App\Contracts\Repositories\SocialMediaLinkRepositoryInterface;
use App\Models\SocialMediaLink;
use Illuminate\Pagination\LengthAwarePaginator;

class SocialMediaLinkService
{
    protected $socialMediaLinkRepository;

    /**
     * SocialMediaLinkService constructor.
     *
     * @param SocialMediaLinkRepositoryInterface $socialMediaLinkRepository
     */
    public function __construct(SocialMediaLinkRepositoryInterface $socialMediaLinkRepository)
    {
        $this->socialMediaLinkRepository = $socialMediaLinkRepository;
    }

    /**
     * Get social media links for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getSocialMediaLinks(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->socialMediaLinkRepository->paginate($perPage);
    }

    /**
     * Store a new social media link.
     *
     * @param array $data
     * @return SocialMediaLink
     */
    public function storeSocialMediaLink(array $data): SocialMediaLink
    {
        return $this->socialMediaLinkRepository->create($data);
    }

    /**
     * Update a social media link.
     *
     * @param SocialMediaLink $socialMediaLink
     * @param array $data
     * @return bool
     */
    public function updateSocialMediaLink(SocialMediaLink $socialMediaLink, array $data): bool
    {
        return $this->socialMediaLinkRepository->update($socialMediaLink->id, $data);
    }

    /**
     * Delete a social media link.
     *
     * @param SocialMediaLink $socialMediaLink
     * @return bool
     */
    public function deleteSocialMediaLink(SocialMediaLink $socialMediaLink): bool
    {
        return $this->socialMediaLinkRepository->delete($socialMediaLink->id);
    }
}
