<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Services\UserService;

class UserController extends BaseController
{

    public function __construct(private UserService $userService)
    {
    }

    /**
     * Process new user creation
     */
    public function store(CreateUserRequest $request)
    {
        $user = $this->userService->createUser($request->validated());

        return $this->successResponse($user, "Tạo người dùng thành công");
    }
}
