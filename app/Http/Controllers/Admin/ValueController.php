<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreValueRequest;
use App\Http\Requests\UpdateValueRequest;
use App\Models\Value;

class ValueController extends Controller
{
    public function index()
    {
        $values = Value::all();
        return view('admin.values.index', compact('values'));
    }

    public function create()
    {
        return view('admin.values.create');
    }

    public function store(StoreValueRequest $request)
    {
        Value::create($request->validated());
        return redirect()->route('admin.values.index')->with('success', 'Value created successfully.');
    }

    public function edit(Value $value)
    {
        return view('admin.values.edit', compact('value'));
    }

    public function update(UpdateValueRequest $request, Value $value)
    {
        $value->update($request->validated());
        return redirect()->route('admin.values.index')->with('success', 'Value updated successfully.');
    }

    public function destroy(Value $value)
    {
        $value->delete();
        return redirect()->route('admin.values.index')->with('success', 'Value deleted successfully.');
    }
}
