<?php

namespace App\Repositories;

use App\Contracts\Repositories\ClientRepositoryInterface;
use App\Models\Client;

class ClientRepository extends BaseRepository implements ClientRepositoryInterface
{
    /**
     * ClientRepository constructor.
     *
     * @param Client $model
     */
    public function __construct(Client $model)
    {
        parent::__construct($model);
    }
}
