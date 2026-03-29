<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Http\Requests\StoreTrustedCompanyRequest;
use App\Http\Requests\UpdateTrustedCompanyRequest;
use App\Models\TrustedCompany;
use Illuminate\Http\Request;
use App\Services\TrustedCompanyService;
use Illuminate\Support\Facades\Storage;

class TrustedCompanyController extends Controller
{
    use FileUploadTrait;

    protected $trustedCompanyService;

    public function __construct(TrustedCompanyService $trustedCompanyService)
    {
        $this->trustedCompanyService = $trustedCompanyService;
    }

    public function index(Request $request)
    {
        $trustedCompanies = $this->trustedCompanyService->getTrustedCompanies($request->all(), 10);
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
        $this->trustedCompanyService->storeTrustedCompany($data);
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
        $this->trustedCompanyService->updateTrustedCompany($trustedCompany, $data);
        return redirect()->route('admin.trusted-companies.index')->with('success', 'Trusted Company updated successfully.');
    }

    public function destroy(TrustedCompany $trustedCompany)
    {
        if ($trustedCompany->logo) {
            Storage::disk('public')->delete($trustedCompany->logo);
        }
        $this->trustedCompanyService->deleteTrustedCompany($trustedCompany);
        return redirect()->route('admin.trusted-companies.index')->with('success', 'Trusted Company deleted successfully.');
    }
}
