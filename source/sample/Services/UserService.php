<?php

namespace Sample\Services;

use Sample\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserService
{
    /**
     * Summary of __construct
     */
    public function __construct(protected UserRepositoryInterface $userRepository)
    {
    }

    /**
     * Summary of getAll
     */
    public function getAll()
    {
        return $this->userRepository->all();
    }

    /**
     * Summary of getUserById
     * @param mixed $id
     */
    public function getUserById($id)
    {
        return $this->userRepository->find($id);
    }

    /**
     * Summary of create
     * @param array $data
     */
    public function create(array $data)
    {
        // Xử lý business logic trước khi tạo user
        $data['password'] = Hash::make($data['password']);
        return $this->userRepository->create($data);
    }

    /**
     * Summary of update
     * @param mixed $id
     * @param array $data
     */
    public function update($id, array $data)
    {
        $user = $this->userRepository->find($id);

        if (empty($user))
            return false;

        return $this->userRepository->update($id, $data);
    }

    /**
     * Summary of delete
     * @param mixed $id
     */
    public function delete($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user))
            return false;

        return $this->userRepository->delete($id);
    }
}
