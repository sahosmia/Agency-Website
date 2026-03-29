<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\StoreWorkingProcessRequest;
use App\Http\Requests\UpdateWorkingProcessRequest;
use App\Models\WorkingProcess;
use Illuminate\Http\Request;
use App\Services\WorkingProcessService;

class WorkingProcessController extends Controller
{
    use FileUploadTrait;

    protected $workingProcessService;

    public function __construct(WorkingProcessService $workingProcessService)
    {
        $this->workingProcessService = $workingProcessService;
    }

    public function index(Request $request)
    {
        $workingProcesses = $this->workingProcessService->getWorkingProcesses($request->all(), 10);
        return view('admin.working_processes.index', compact('workingProcesses'));
    }

    public function create()
    {
        return view('admin.working_processes.create');
    }

    public function store(StoreWorkingProcessRequest $request)
    {
        $data = $request->validated();
        $data['icon'] = $this->uploadFile($request, 'icon', 'working_processes');
        $this->workingProcessService->storeWorkingProcess($data);

        return redirect()->route('admin.working-processes.index')->with('success', 'Working Process created successfully.');
    }

    public function edit(WorkingProcess $workingProcess)
    {
        return view('admin.working_processes.edit', compact('workingProcess'));
    }

    public function update(UpdateWorkingProcessRequest $request, WorkingProcess $workingProcess)
    {
        $data = $request->validated();
        $data['icon'] = $this->updateFile($request, 'icon', 'working_processes', $workingProcess);
        $this->workingProcessService->updateWorkingProcess($workingProcess, $data);
        return redirect()->route('admin.working-processes.index')->with('success', 'Working Process updated successfully.');
    }

    public function destroy(WorkingProcess $workingProcess)
    {
        $this->workingProcessService->deleteWorkingProcess($workingProcess);
        return redirect()->route('admin.working-processes.index')->with('success', 'Working Process deleted successfully.');
    }
}
