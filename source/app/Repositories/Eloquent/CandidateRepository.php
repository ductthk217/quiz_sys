<?php

namespace App\Repositories\Eloquent;

use App\Models\Candidate;
use App\Repositories\Interfaces\CandidateRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;

class CandidateRepository extends BaseRepository implements CandidateRepositoryInterface
{

    public function getModel()
    {
        return Candidate::class;
    }
}
