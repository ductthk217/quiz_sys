<?php

namespace App\Http\Requests\Candidate;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $candidateId = $this->route('candidate') ?? 'NULL';

        return [
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15|unique:candidates,phone_number,' . $candidateId,
            'email' => 'required|email|unique:candidates,email,' . $candidateId,
        ];
    }
}
