<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'     => 'required|string|max:50',
            'email'    => 'required|email|unique:users,email|max:100',
            'password' => 'required|string|min:8|confirmed',
            'role'     => 'required|in:admin,recruiter',
        ];
    }

    /**
     * Customize error messages
     */
    public function messages(): array
    {
        return [
            'name.required'     => 'Tên không được để trống.',
            'name.max'          => 'Tên không được quá 50 ký tự.',
            'email.required'    => 'Email không được để trống.',
            'email.email'       => 'Email không hợp lệ.',
            'email.unique'      => 'Email đã được sử dụng.',
            'email.max'         => 'Email không được quá 100 ký tự.',
            'password.required' => 'Mật khẩu không được để trống.',
            'password.min'      => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.confirmed'=> 'Mật khẩu nhập lại không khớp.',
            'role.required'     => 'Vai trò là bắt buộc.',
            'role.in'           => 'Vai trò phải là admin hoặc recruiter.',
        ];
    }
}
