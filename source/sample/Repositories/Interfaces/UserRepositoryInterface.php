<?php

namespace Sample\Repositories\Interfaces;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    /**
     * Summary of findByEmail
     * @param string $email
     */
    public function findByEmail(string $email);
}
