<?php

namespace App\Http\Requests\Question;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'category_id' => 'required|exists:question_categories,id',
            'content' => 'required|string',
            'score' => 'nullable|numeric|min:0.1|max:10',
            'type' => 'required|in:choice,essay',
            'status' => 'required|in:draft,public,cancel',
        ];
    }

    public function messages(): array
    {
        return [
            'category_id.required' => 'Danh mục là bắt buộc.',
            'category_id.exists' => 'Danh mục không tồn tại.',
            'content.required' => 'Nội dung câu hỏi là bắt buộc.',
            'content.string' => 'Nội dung phải là chuỗi.',
            'score.numeric' => 'Điểm phải là số.',
            'score.min' => 'Điểm không được nhỏ hơn 0.1.',
            'score.max' => 'Điểm không được lớn hơn 10.',
            'type.required' => 'Loại câu hỏi là bắt buộc.',
            'type.in' => 'Loại câu hỏi không hợp lệ.',
            'status.required' => 'Trạng thái là bắt buộc.',
            'status.in' => 'Trạng thái không hợp lệ.',
        ];
    }
}
