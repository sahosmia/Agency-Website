<?php

namespace App\Repositories;

use App\Contracts\Repositories\SocialMediaLinkRepositoryInterface;
use App\Models\SocialMediaLink;

class SocialMediaLinkRepository extends BaseRepository implements SocialMediaLinkRepositoryInterface
{
    /**
     * SocialMediaLinkRepository constructor.
     *
     * @param SocialMediaLink $model
     */
    public function __construct(SocialMediaLink $model)
    {
        parent::__construct($model);
    }
}
