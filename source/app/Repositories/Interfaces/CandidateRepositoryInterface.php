<?php

namespace App\Repositories\Interfaces;

use App\Models\Candidate;
use Illuminate\Support\Collection;

interface CandidateRepositoryInterface
{
    public function findAll(): Collection;
    public function findById($id): Candidate;
    public function create(array $data): Candidate;
    public function update($id, array $data): Candidate;
    public function delete($id): bool;
}
