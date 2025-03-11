<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdatePasswordUserRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(UpdatePasswordUserRequest $request): JsonResponse
    {
        $validated = $request->validated();
    
        $request->user()->update([
            'password' => Hash::make($validated['new_password']),
        ]);
    
        return response()->json([
            "status" => 200,
            'message' => 'Cập nhật thành công.'
        ]);
    }
}
