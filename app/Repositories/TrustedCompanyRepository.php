<?php

namespace App\Repositories;

use App\Contracts\Repositories\TrustedCompanyRepositoryInterface;
use App\Models\TrustedCompany;

class TrustedCompanyRepository extends BaseRepository implements TrustedCompanyRepositoryInterface
{
    /**
     * TrustedCompanyRepository constructor.
     *
     * @param TrustedCompany $model
     */
    public function __construct(TrustedCompany $model)
    {
        parent::__construct($model);
    }
}
