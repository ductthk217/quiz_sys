<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'current_password' => 'required|string|min:8|current_password',
            'new_password'     => 'required|string|min:8|confirmed',
        ];
    }
    
    /**
     * Customize error messages
     */
    public function messages(): array
    {
        return [
            'current_password.required' => 'Mật khẩu hiện tại không được để trống.',
            'current_password.min'      => 'Mật khẩu hiện tại phải có ít nhất 8 ký tự.',
            'current_password.current_password' => 'Mật khẩu hiện tại không chính xác.',
    
            'new_password.required' => 'Mật khẩu mới không được để trống.',
            'new_password.min'      => 'Mật khẩu mới phải có ít nhất 8 ký tự.',
            'new_password.confirmed'=> 'Mật khẩu nhập lại không khớp.',
        ];
    }
    
}
