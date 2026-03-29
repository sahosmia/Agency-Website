<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TeamRequest;
use App\Models\Team;
use App\Models\Designation;
use Illuminate\Http\Request;
use App\Services\TeamService;
use App\Http\Controllers\Traits\FileUploadTrait;

class TeamController extends Controller
{
    use FileUploadTrait;

    protected $teamService;

    public function __construct(TeamService $teamService)
    {
        $this->teamService = $teamService;
    }

    public function index(Request $request)
    {
        $teams = $this->teamService->getTeams($request->all(), 10);
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
        $data = $request->validated();
        if ($request->hasFile('avatar')) {
            $data['avatar'] = $this->uploadFile($request, 'avatar', 'uploads/teams');
        }

        $this->teamService->storeTeam($data);
        return redirect()->route('admin.teams.index')->with('success', 'Team member created successfully.');
    }

    public function edit(Team $team)
    {
        $designations = Designation::all();
        return view('admin.teams.edit', compact('team', 'designations'));
    }

    public function update(TeamRequest $request, Team $team)
    {
        $data = $request->validated();
        if ($request->hasFile('avatar')) {
            $this->deleteFile($team->avatar, 'uploads/teams');
            $data['avatar'] = $this->uploadFile($request, 'avatar', 'uploads/teams');
        }

        $this->teamService->updateTeam($team, $data);
        return redirect()->route('admin.teams.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(Team $team)
    {
        $this->deleteFile($team->avatar, 'uploads/teams');
        $this->teamService->deleteTeam($team);
        return redirect()->route('admin.teams.index')->with('success', 'Team member deleted successfully.');
    }
}
