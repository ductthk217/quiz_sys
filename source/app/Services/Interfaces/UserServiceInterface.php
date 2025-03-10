<?php

namespace App\Services\Interfaces;

use App\Models\User;

interface UserServiceInterface
{
    /**
     * How to create new user
     *
     * @param array $data
     * @return User
     */
    public function createUser(array $data): User;
}
