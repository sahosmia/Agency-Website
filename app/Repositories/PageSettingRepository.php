<?php

namespace App\Repositories;

use App\Contracts\Repositories\PageSettingRepositoryInterface;
use App\Models\PageSetting;

class PageSettingRepository extends BaseRepository implements PageSettingRepositoryInterface
{
    /**
     * PageSettingRepository constructor.
     *
     * @param PageSetting $model
     */
    public function __construct(PageSetting $model)
    {
        parent::__construct($model);
    }

    /**
     * @inheritdoc
     */
    public function getSettings(string $pageName): array
    {
        $page = $this->model->where('page_name', $pageName)->first();
        return $page ? $page->settings : [];
    }

    /**
     * @inheritdoc
     */
    public function updateSettings(string $pageName, array $settings): bool
    {
        $page = $this->model->firstOrNew(['page_name' => $pageName]);
        $page->settings = $settings;
        return $page->save();
    }
}
