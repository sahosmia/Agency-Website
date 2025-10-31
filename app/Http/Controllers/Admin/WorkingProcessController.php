<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\StoreWorkingProcessRequest;
use App\Http\Requests\UpdateWorkingProcessRequest;
use App\Models\WorkingProcess;

class WorkingProcessController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        $workingProcesses = WorkingProcess::all();
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
        WorkingProcess::create($data);

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
        $workingProcess->update($data);
        return redirect()->route('admin.working-processes.index')->with('success', 'Working Process updated successfully.');
    }

    public function destroy(WorkingProcess $workingProcess)
    {
        $workingProcess->delete();
        return redirect()->route('admin.working-processes.index')->with('success', 'Working Process deleted successfully.');
    }
}
