<?php

namespace App\Services;

use App\Contracts\Repositories\ClientRepositoryInterface;
use App\Models\Client;
use Illuminate\Pagination\LengthAwarePaginator;

class ClientService
{
    protected $clientRepository;

    /**
     * ClientService constructor.
     *
     * @param ClientRepositoryInterface $clientRepository
     */
    public function __construct(ClientRepositoryInterface $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    /**
     * Get clients for index.
     *
     * @param array $filters
     * @param int $perPage
     * @return LengthAwarePaginator
     */
    public function getClients(array $filters, int $perPage): LengthAwarePaginator
    {
        return $this->clientRepository->paginate($perPage);
    }

    /**
     * Store a new client.
     *
     * @param array $data
     * @return Client
     */
    public function storeClient(array $data): Client
    {
        return $this->clientRepository->create($data);
    }

    /**
     * Update a client.
     *
     * @param Client $client
     * @param array $data
     * @return bool
     */
    public function updateClient(Client $client, array $data): bool
    {
        return $this->clientRepository->update($client->id, $data);
    }

    /**
     * Delete a client.
     *
     * @param Client $client
     * @return bool
     */
    public function deleteClient(Client $client): bool
    {
        return $this->clientRepository->delete($client->id);
    }
}
