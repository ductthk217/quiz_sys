<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\Eloquent\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Create new user
     *
     * @param array $data
     * @return User
     */
    public function createUser(array $data): User
    {
        $data['password'] = Hash::make($data['password']);

        return $this->userRepository->create($data);
    }

    public function updateProfile(User $user, array $data) {
        try {
            return $this->userRepository->update($user->id, $data);
        } catch (\Exception $e) {
            Log::error("Lỗi khi cập nhật hồ sơ: " . $e->getMessage());
            return false;
        }
    }

    public function changePassword(User $user, string $newPassword): bool
    {
        return $this->userRepository->updatePassword($user, $newPassword);
    }
}
