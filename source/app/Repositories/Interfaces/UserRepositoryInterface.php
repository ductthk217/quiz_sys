<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

interface UserRepositoryInterface
{
    /**
     * Create new user
     *
     * @param array $data
     * @return User
     */
    public function create(array $data): User;
}
