<?php

namespace App\Contracts\Repositories;

interface PageSettingRepositoryInterface extends RepositoryInterface
{
    /**
     * Get settings by page name.
     *
     * @param string $pageName
     * @return array
     */
    public function getSettings(string $pageName): array;

    /**
     * Update settings for a page.
     *
     * @param string $pageName
     * @param array $settings
     * @return bool
     */
    public function updateSettings(string $pageName, array $settings): bool;
}
