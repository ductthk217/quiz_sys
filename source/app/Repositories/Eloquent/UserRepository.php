<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function updatePassword(User $user, string $newPassword): bool
    {
        return $user->update([
            'password' => Hash::make($newPassword),
        ]);
    }

    public function update($id, array $data) {
        $user = $this->find($id);

        if (!$user) {
            return false;
        }
        // Kiểm tra nếu email thay đổi -> reset xác minh
        if (isset($data['email']) && $user->email !== $data['email']) {
            $data['email_verified_at'] = null;
        }

        return parent::update($id, $data);
    }
}
