<?php

namespace App\Http\Controllers\Admin;

use App\Models\Designation;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDesignationRequest;
use App\Http\Requests\UpdateDesignationRequest;
use Illuminate\Http\Request;
use App\Services\DesignationService;

class DesignationController extends Controller
{
    protected $designationService;

    public function __construct(DesignationService $designationService)
    {
        $this->designationService = $designationService;
    }

    public function index(Request $request)
    {
        $designations = $this->designationService->getDesignations($request->all(), 10);

        return view('admin.designations.index', compact('designations'));
    }

    public function create()
    {
        return view('admin.designations.create');
    }

    public function store(StoreDesignationRequest $request)
    {
        $this->designationService->storeDesignation($request->validated());

        return redirect()->route('admin.designations.index')->with('success', 'Designation created successfully.');
    }

    public function edit(Designation $designation)
    {
        return view('admin.designations.edit', compact('designation'));
    }

    public function update(UpdateDesignationRequest $request, Designation $designation)
    {
        $this->designationService->updateDesignation($designation, $request->validated());

        return redirect()->route('admin.designations.index')->with('success', 'Designation updated successfully.');
    }

    public function destroy(Designation $designation)
    {
        $this->designationService->deleteDesignation($designation);

        return redirect()->route('admin.designations.index')->with('success', 'Designation deleted successfully.');
    }
}
