<?php

namespace App\Services;

use App\Contracts\Repositories\ProjectRepositoryInterface;
use App\Models\Project;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class ProjectService
{
    protected $projectRepository;

    /**
     * ProjectService constructor.
     *
     * @param ProjectRepositoryInterface $projectRepository
     */
    public function __construct(ProjectRepositoryInterface $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * Get projects for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getProjects(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->projectRepository->getFilteredProjects($filters, $perPage);
    }

    /**
     * Store a new project.
     *
     * @param array $data
     * @return Project
     */
    public function storeProject(array $data): Project
    {
        return DB::transaction(function () use ($data) {
            $project = $this->projectRepository->create($data);

            if (isset($data['faqs'])) {
                $project->faqs()->createMany($data['faqs']);
            }

            return $project;
        });
    }

    /**
     * Update a project.
     *
     * @param Project $project
     * @param array $data
     * @return bool
     */
    public function updateProject(Project $project, array $data): bool
    {
        return DB::transaction(function () use ($project, $data) {
            $updated = $project->update($data);

            if ($updated && isset($data['faqs'])) {
                $project->faqs()->delete();
                $project->faqs()->createMany($data['faqs']);
            }

            return $updated;
        });
    }

    /**
     * Delete a project.
     *
     * @param Project $project
     * @return bool
     */
    public function deleteProject(Project $project): bool
    {
        return $project->delete();
    }
}
