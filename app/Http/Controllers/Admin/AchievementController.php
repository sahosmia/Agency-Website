<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\AdminPagination;
use App\Models\Achievement;
use App\Http\Requests\Admin\Achievement\StoreAchievementRequest;
use App\Http\Requests\Admin\Achievement\UpdateAchievementRequest;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    use AdminPagination;

    public function index(Request $request)
    {
        $adminPagination = $this->getAdminPagination();

        $query = Achievement::query();

        if ($request->filled('q')) {
            $query->where('title', 'like', "%{$request->q}%");
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $achievements = $query->latest()->paginate($adminPagination);

        return view('admin.achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('admin.achievements.create');
    }

    public function store(StoreAchievementRequest $request)
    {
        $data = $request->validated();

        Achievement::create($data);
        return redirect()->route('admin.achievements.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(Achievement $achievement)
    {

        return view('admin.achievements.edit', compact('achievement'));
    }

    public function update(UpdateAchievementRequest $request, Achievement $achievement)
    {

        $data = $request->validated();
        $achievement->update($data);

        return redirect()->route('admin.achievements.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Achievement $achievement)
    {
        $achievement->delete();

        return redirect()->route('admin.achievements.index')->with('success', 'Testimonial deleted successfully.');
    }
}
