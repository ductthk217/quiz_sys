<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdatePasswordUserRequest;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    
    /**
     * Update the user's password.
     */
    public function update(UpdatePasswordUserRequest $request): JsonResponse
    {
        $validated = $request->validated();
        dd($request->user());
        $this->userService->changePassword($request->user(), $validated['new_password']);
    
        return response()->json([
            "status" => 200,
            'message' => 'Cập nhật thành công.'
        ]);
    }
}
