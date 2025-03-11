<?php

namespace App\Services;

use App\Models\Candidate;
use App\Repositories\Interfaces\candidateRepositoryInterface;
use App\Services\Interfaces\CandidateServiceInterface;
use Illuminate\Support\Collection;

class CandidateService implements CandidateServiceInterface
{
    protected $candidateRepository;
    public function __construct(candidateRepositoryInterface $candidateRepositoryInterface)
    {
        $this->candidateRepository = $candidateRepositoryInterface;
    }
    public function create(array $data): Candidate
    {
        return $this->candidateRepository->create($data);
    }
    public function getAll(): Collection{
        return $this->candidateRepository->findAll();
    }
    public function getById($id): ?Candidate{
        return $this->candidateRepository->findById($id) ?? null;
    }
    public function update($id, array $data): ?Candidate
    {
        return $this->candidateRepository->update($id, $data);
    }
    public function delete($id): bool
    {
        return $this->candidateRepository->delete($id);
    }
}
