<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreValueRequest;
use App\Http\Requests\UpdateValueRequest;
use App\Models\Value;
use Illuminate\Http\Request;
use App\Services\ValueService;

class ValueController extends Controller
{
    protected $valueService;

    public function __construct(ValueService $valueService)
    {
        $this->valueService = $valueService;
    }

    public function index(Request $request)
    {
        $values = $this->valueService->getValues($request->all(), 10);
        return view('admin.values.index', compact('values'));
    }

    public function create()
    {
        return view('admin.values.create');
    }

    public function store(StoreValueRequest $request)
    {
        $this->valueService->storeValue($request->validated());
        return redirect()->route('admin.values.index')->with('success', 'Value created successfully.');
    }

    public function edit(Value $value)
    {
        return view('admin.values.edit', compact('value'));
    }

    public function update(UpdateValueRequest $request, Value $value)
    {
        $this->valueService->updateValue($value, $request->validated());
        return redirect()->route('admin.values.index')->with('success', 'Value updated successfully.');
    }

    public function destroy(Value $value)
    {
        $this->valueService->deleteValue($value);
        return redirect()->route('admin.values.index')->with('success', 'Value deleted successfully.');
    }
}
