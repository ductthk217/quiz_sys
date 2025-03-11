<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
    public function rules($id = null): array
    {
        $user_id = $id ?? $this->user()->id;
        return [
            'name'  => 'required|string|max:50',
            'email' => 'required|email|max:100|unique:users,email,' . $user_id,
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
            'email.max'         => 'Email không được quá 100 ký tự.',
            'email.unique'      => 'Email đã được sử dụng.',
        ];
    }
    
}
