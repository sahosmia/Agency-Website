<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamRequest;
use App\Models\Team;
use App\Models\Designation;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Traits\HandleIsActive;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    use FileUploadTrait, HandleIsActive;

    public function index(Request $request)
    {
        $query = Team::query()->with('designation');

        if ($request->filled('q')) {
            $query->where('name', 'like', "%{$request->q}%");
        }

        if ($request->filled('designation_id')) {
            $query->where('designation_id', $request->designation_id);
        }

        if ($request->filled('status')) {
            $query->where('is_active', $request->status);
        }

        $teams = $query->latest()->paginate(10);
        $designations = Designation::all();

        return view('admin.teams.index', compact('teams', 'designations'));
    }

    public function create()
    {
        $designations = Designation::all();
        return view('admin.teams.create', compact('designations'));
    }

    public function store(TeamRequest $request)
    {
        $data = $request->except('avatar');
        $this->handleIsActive($request, $data);
        $data['avatar'] = $this->uploadFile($request, 'avatar', 'teams');
        Team::create($data);

        return redirect()->route('admin.teams.index')->with('success', 'Team member created successfully.');
    }

    public function edit(Team $team)
    {
        $designations = Designation::all();
        return view('admin.teams.edit', compact('team', 'designations'));
    }

    public function update(TeamRequest $request, Team $team)
    {
        $data = $request->except('avatar');
        $this->handleIsActive($request, $data);
        $data['avatar'] = $this->updateFile($request, 'avatar', 'teams', $team);
        $team->update($data);

        return redirect()->route('admin.teams.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(Team $team)
    {
        $this->deleteFile($team->avatar, 'uploads/teams');
        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team member deleted successfully.');
    }
}
