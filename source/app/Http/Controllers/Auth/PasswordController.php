<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdatePasswordUserRequest;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
    public function update(UpdatePasswordUserRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $this->userService->changePassword($request->user(), $validated['update_password_password']);

        return back()->with('status', 'password-updated');
    }
}
