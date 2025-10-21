<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkingProcess;
use Illuminate\Http\Request;

class WorkingProcessController extends Controller
{
    public function index()
    {
        $workingProcesses = WorkingProcess::all();
        return view('admin.working_processes.index', compact('workingProcesses'));
    }

    public function create()
    {
        return view('admin.working_processes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:255',
        ]);

        WorkingProcess::create($request->all());

        return redirect()->route('admin.working-processes.index')->with('success', 'Working Process created successfully.');
    }

    public function edit(WorkingProcess $workingProcess)
    {
        return view('admin.working_processes.edit', compact('workingProcess'));
    }

    public function update(Request $request, WorkingProcess $workingProcess)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:255',
        ]);

        $workingProcess->update($request->all());

        return redirect()->route('admin.working-processes.index')->with('success', 'Working Process updated successfully.');
    }

    public function destroy(WorkingProcess $workingProcess)
    {
        $workingProcess->delete();

        return redirect()->route('admin.working-processes.index')->with('success', 'Working Process deleted successfully.');
    }
}
