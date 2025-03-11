<?php

namespace Sample\Repositories\Repositories;

use Sample\Models\User;
use Sample\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    /**
     * Summary of __construct
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * Summary of findByEmail
     * @param string $email
     * 
     * @return User|null
     */
    public function findByEmail(string $email)
    {
        return $this->model->where('email', $email)->first();
    }
}
