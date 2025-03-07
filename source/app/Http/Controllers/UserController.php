<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Services\Interfaces\UserServiceInterface;

class UserController extends BaseController
{

    public function __construct(private UserServiceInterface $userServiceInterface)
    {
    }

    /**
     * Process new user creation
     */
    public function store(CreateUserRequest $request)
    {
        $user = $this->userServiceInterface->createUser($request->validated());

        return $this->successResponse($user, "Tạo người dùng thành công");
    }
}
