<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\StoreTrustedCompanyRequest;
use App\Http\Requests\UpdateTrustedCompanyRequest;
use App\Models\TrustedCompany;
use Illuminate\Support\Facades\Storage;

class TrustedCompanyController extends Controller
{
    use FileUploadTrait;
    public function index()
    {
        $trustedCompanies = TrustedCompany::all();
        return view('admin.trusted_companies.index', compact('trustedCompanies'));
    }

    public function create()
    {
        return view('admin.trusted_companies.create');
    }

    public function store(StoreTrustedCompanyRequest $request)
    {
        $data = $request->validated();
        $data['logo'] = $this->uploadFile($request, 'logo', 'trusted_companies');
        TrustedCompany::create($data);
        return redirect()->route('admin.trusted-companies.index')->with('success', 'Trusted Company created successfully.');
    }

    public function edit(TrustedCompany $trustedCompany)
    {
        return view('admin.trusted_companies.edit', compact('trustedCompany'));
    }

    public function update(UpdateTrustedCompanyRequest $request, TrustedCompany $trustedCompany)
    {
        $data = $request->validated();
        $data['logo'] = $this->updateFile($request, 'logo', 'trusted_companies', $trustedCompany);
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
