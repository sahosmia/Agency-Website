<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Value;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:255',
        ]);

        Value::create($request->all());

        return redirect()->route('admin.values.index')->with('success', 'Value created successfully.');
    }

    public function edit(Value $value)
    {
        return view('admin.values.edit', compact('value'));
    }

    public function update(Request $request, Value $value)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|max:255',
        ]);

        $value->update($request->all());

        return redirect()->route('admin.values.index')->with('success', 'Value updated successfully.');
    }

    public function destroy(Value $value)
    {
        $value->delete();

        return redirect()->route('admin.values.index')->with('success', 'Value deleted successfully.');
    }
}
