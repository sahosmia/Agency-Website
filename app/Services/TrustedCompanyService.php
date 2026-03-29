<?php

namespace App\Services;

use App\Contracts\Repositories\TrustedCompanyRepositoryInterface;
use App\Models\TrustedCompany;
use Illuminate\Pagination\LengthAwarePaginator;

class TrustedCompanyService
{
    protected $trustedCompanyRepository;

    /**
     * TrustedCompanyService constructor.
     *
     * @param TrustedCompanyRepositoryInterface $trustedCompanyRepository
     */
    public function __construct(TrustedCompanyRepositoryInterface $trustedCompanyRepository)
    {
        $this->trustedCompanyRepository = $trustedCompanyRepository;
    }

    /**
     * Get trusted companies for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getTrustedCompanies(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->trustedCompanyRepository->paginate($perPage);
    }

    /**
     * Store a new trusted company.
     *
     * @param array $data
     * @return TrustedCompany
     */
    public function storeTrustedCompany(array $data): TrustedCompany
    {
        return $this->trustedCompanyRepository->create($data);
    }

    /**
     * Update a trusted company.
     *
     * @param TrustedCompany $trustedCompany
     * @param array $data
     * @return bool
     */
    public function updateTrustedCompany(TrustedCompany $trustedCompany, array $data): bool
    {
        return $this->trustedCompanyRepository->update($trustedCompany->id, $data);
    }

    /**
     * Delete a trusted company.
     *
     * @param TrustedCompany $trustedCompany
     * @return bool
     */
    public function deleteTrustedCompany(TrustedCompany $trustedCompany): bool
    {
        return $this->trustedCompanyRepository->delete($trustedCompany->id);
    }
}
