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
        try {
            return $this->candidateRepository->create($data);
        } catch (\Exception $e) {
            throw new \Exception('Email đã tồn tại!'); // Ném lỗi để Controller bắt
        }
    }


    public function getAll(): Collection
    {
        return $this->candidateRepository->getAll();
    }
    public function getById($id): ?Candidate
    {
        return $this->candidateRepository->find($id) ?? null;
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
