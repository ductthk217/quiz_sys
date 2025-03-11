<?php

namespace App\Http\Controllers;

use App\Http\Requests\Question\StoreQuestionRequest;
use App\Services\QuestionService;

class QuestionController extends BaseController
{

    public function __construct(private QuestionService $questionService)
    {
    }

    /**
     * Process new Question creation
     */
    public function store(StoreQuestionRequest $request)
    {
        $Question = $this->questionService->createQuestion($request->validated());

        return $this->successResponse($Question, "Tạo câu hỏi thành công");
    }
}
