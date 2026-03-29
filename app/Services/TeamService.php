<?php

namespace App\Services;

use App\Contracts\Repositories\TeamRepositoryInterface;
use App\Models\Team;
use Illuminate\Pagination\LengthAwarePaginator;

class TeamService
{
    protected $teamRepository;

    /**
     * TeamService constructor.
     *
     * @param TeamRepositoryInterface $teamRepository
     */
    public function __construct(TeamRepositoryInterface $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    /**
     * Get teams for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getTeams(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->teamRepository->paginate($perPage, ['*'], ['designation']);
    }

    /**
     * Store a new team member.
     *
     * @param array $data
     * @return Team
     */
    public function storeTeam(array $data): Team
    {
        return $this->teamRepository->create($data);
    }

    /**
     * Update a team member.
     *
     * @param Team $team
     * @param array $data
     * @return bool
     */
    public function updateTeam(Team $team, array $data): bool
    {
        return $this->teamRepository->update($team->id, $data);
    }

    /**
     * Delete a team member.
     *
     * @param Team $team
     * @return bool
     */
    public function deleteTeam(Team $team): bool
    {
        return $this->teamRepository->delete($team->id);
    }
}
