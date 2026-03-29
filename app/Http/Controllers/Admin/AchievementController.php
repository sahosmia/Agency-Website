<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\AdminPagination;
use App\Models\Achievement;
use App\Http\Requests\Admin\Achievement\StoreAchievementRequest;
use App\Http\Requests\Admin\Achievement\UpdateAchievementRequest;
use Illuminate\Http\Request;
use App\Services\AchievementService;

class AchievementController extends Controller
{
    use AdminPagination;

    protected $achievementService;

    public function __construct(AchievementService $achievementService)
    {
        $this->achievementService = $achievementService;
    }

    public function index(Request $request)
    {
        $adminPagination = $this->getAdminPagination();
        $achievements = $this->achievementService->getAchievements($request->all(), $adminPagination);

        return view('admin.achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('admin.achievements.create');
    }

    public function store(StoreAchievementRequest $request)
    {
        $this->achievementService->storeAchievement($request->validated());
        return redirect()->route('admin.achievements.index')->with('success', 'Achievement created successfully.');
    }

    public function edit(Achievement $achievement)
    {
        return view('admin.achievements.edit', compact('achievement'));
    }

    public function update(UpdateAchievementRequest $request, Achievement $achievement)
    {
        $this->achievementService->updateAchievement($achievement, $request->validated());
        return redirect()->route('admin.achievements.index')->with('success', 'Achievement updated successfully.');
    }

    public function destroy(Achievement $achievement)
    {
        $this->achievementService->deleteAchievement($achievement);
        return redirect()->route('admin.achievements.index')->with('success', 'Achievement deleted successfully.');
    }
}
