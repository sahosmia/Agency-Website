<?php

namespace App\Services;

use App\Contracts\Repositories\ValueRepositoryInterface;
use App\Models\Value;
use Illuminate\Pagination\LengthAwarePaginator;

class ValueService
{
    protected $valueRepository;

    /**
     * ValueService constructor.
     *
     * @param ValueRepositoryInterface $valueRepository
     */
    public function __construct(ValueRepositoryInterface $valueRepository)
    {
        $this->valueRepository = $valueRepository;
    }

    /**
     * Get values for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getValues(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->valueRepository->paginate($perPage);
    }

    /**
     * Store a new value.
     *
     * @param array $data
     * @return Value
     */
    public function storeValue(array $data): Value
    {
        return $this->valueRepository->create($data);
    }

    /**
     * Update a value.
     *
     * @param Value $value
     * @param array $data
     * @return bool
     */
    public function updateValue(Value $value, array $data): bool
    {
        return $this->valueRepository->update($value->id, $data);
    }

    /**
     * Delete a value.
     *
     * @param Value $value
     * @return bool
     */
    public function deleteValue(Value $value): bool
    {
        return $this->valueRepository->delete($value->id);
    }
}
