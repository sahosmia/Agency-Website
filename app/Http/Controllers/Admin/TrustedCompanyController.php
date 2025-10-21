<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TrustedCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrustedCompanyController extends Controller
{
    public function index()
    {
        $trustedCompanies = TrustedCompany::all();
        return view('admin.trusted_companies.index', compact('trustedCompanies'));
    }

    public function create()
    {
        return view('admin.trusted_companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except('logo');

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('trusted_companies', 'public');
            $data['logo'] = $path;
        }

        TrustedCompany::create($data);

        return redirect()->route('admin.trusted-companies.index')->with('success', 'Trusted Company created successfully.');
    }

    public function edit(TrustedCompany $trustedCompany)
    {
        return view('admin.trusted_companies.edit', compact('trustedCompany'));
    }

    public function update(Request $request, TrustedCompany $trustedCompany)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->except('logo');

        if ($request->hasFile('logo')) {
            if ($trustedCompany->logo) {
                Storage::disk('public')->delete($trustedCompany->logo);
            }
            $path = $request->file('logo')->store('trusted_companies', 'public');
            $data['logo'] = $path;
        }

        $trustedCompany->update($data);

        return redirect()->route('admin.trusted-companies.index')->with('success', 'Trusted Company updated successfully.');
    }

    public function destroy(TrustedCompany $trustedCompany)
    {
        if ($trustedCompany->logo) {
            Storage::disk('public')->delete($trustedCompany->logo);
        }
        $trustedCompany->delete();

        return redirect()->route('admin.trusted-companies.index')->with('success', 'Trusted Company deleted successfully.');
    }
}
