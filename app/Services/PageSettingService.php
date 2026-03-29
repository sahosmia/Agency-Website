<?php

namespace App\Services;

use App\Contracts\Repositories\PageSettingRepositoryInterface;
use App\Models\PageSetting;

class PageSettingService
{
    protected $pageSettingRepository;

    /**
     * PageSettingService constructor.
     *
     * @param PageSettingRepositoryInterface $pageSettingRepository
     */
    public function __construct(PageSettingRepositoryInterface $pageSettingRepository)
    {
        $this->pageSettingRepository = $pageSettingRepository;
    }

    /**
     * Get settings for a page.
     *
     * @param string $pageName
     * @return array
     */
    public function getSettings(string $pageName): array
    {
        return $this->pageSettingRepository->getSettings($pageName);
    }

    /**
     * Update page settings.
     *
     * @param string $pageName
     * @param array $settings
     * @return bool
     */
    public function updatePageSettings(string $pageName, array $settings): bool
    {
        return $this->pageSettingRepository->updateSettings($pageName, $settings);
    }
}
