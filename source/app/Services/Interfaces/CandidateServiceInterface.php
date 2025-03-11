<?php
namespace App\Services\Interfaces;

use App\Models\Candidate;
use Illuminate\Support\Collection;

interface CandidateServiceInterface {
    public function create(array $data): array|Candidate;
    public function getAll():Collection;
    public function getById($id): ?Candidate;
    public function update($id, array $data): ?Candidate;
    public function delete($id): bool;
}