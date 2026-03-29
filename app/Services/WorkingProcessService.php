<?php

namespace App\Services;

use App\Contracts\Repositories\WorkingProcessRepositoryInterface;
use App\Models\WorkingProcess;
use Illuminate\Pagination\LengthAwarePaginator;

class WorkingProcessService
{
    protected $workingProcessRepository;

    /**
     * WorkingProcessService constructor.
     *
     * @param WorkingProcessRepositoryInterface $workingProcessRepository
     */
    public function __construct(WorkingProcessRepositoryInterface $workingProcessRepository)
    {
        $this->workingProcessRepository = $workingProcessRepository;
    }

    /**
     * Get working processes for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getWorkingProcesses(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->workingProcessRepository->paginate($perPage);
    }

    /**
     * Store a new working process.
     *
     * @param array $data
     * @return WorkingProcess
     */
    public function storeWorkingProcess(array $data): WorkingProcess
    {
        return $this->workingProcessRepository->create($data);
    }

    /**
     * Update a working process.
     *
     * @param WorkingProcess $workingProcess
     * @param array $data
     * @return bool
     */
    public function updateWorkingProcess(WorkingProcess $workingProcess, array $data): bool
    {
        return $this->workingProcessRepository->update($workingProcess->id, $data);
    }

    /**
     * Delete a working process.
     *
     * @param WorkingProcess $workingProcess
     * @return bool
     */
    public function deleteWorkingProcess(WorkingProcess $workingProcess): bool
    {
        return $this->workingProcessRepository->delete($workingProcess->id);
    }
}
