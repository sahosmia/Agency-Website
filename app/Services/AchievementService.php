<?php

namespace App\Services;

use App\Contracts\Repositories\AchievementRepositoryInterface;
use App\Models\Achievement;
use Illuminate\Pagination\LengthAwarePaginator;

class AchievementService
{
    protected $achievementRepository;

    /**
     * AchievementService constructor.
     *
     * @param AchievementRepositoryInterface $achievementRepository
     */
    public function __construct(AchievementRepositoryInterface $achievementRepository)
    {
        $this->achievementRepository = $achievementRepository;
    }

    /**
     * Get achievements for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getAchievements(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->achievementRepository->paginate($perPage);
    }

    /**
     * Store a new achievement.
     *
     * @param array $data
     * @return Achievement
     */
    public function storeAchievement(array $data): Achievement
    {
        return $this->achievementRepository->create($data);
    }

    /**
     * Update an achievement.
     *
     * @param Achievement $achievement
     * @param array $data
     * @return bool
     */
    public function updateAchievement(Achievement $achievement, array $data): bool
    {
        return $this->achievementRepository->update($achievement->id, $data);
    }

    /**
     * Delete an achievement.
     *
     * @param Achievement $achievement
     * @return bool
     */
    public function deleteAchievement(Achievement $achievement): bool
    {
        return $this->achievementRepository->delete($achievement->id);
    }
}
