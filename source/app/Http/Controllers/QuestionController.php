<?php

namespace App\Http\Controllers;

use App\Http\Requests\Question\StoreQuestionRequest;
use App\Services\QuestionService;
use Illuminate\Support\Facades\Log;

class QuestionController extends BaseController
{

    public function __construct(private QuestionService $questionService)
    {
    }

    public function create()
    {
        $categories = $this->questionService->getCategoryQuestion();
        return view('questions.create', compact('categories'));
    }

    /**
     * Process new Question creation
     */
    public function store(StoreQuestionRequest $request)
    {
        Log::info('Store question start', ['data' => $request->validated()]);
        $this->questionService->createQuestion($request->validated());
        return redirect()->route('question.create')->with('success', 'Câu hỏi đã được tạo thành công!');
    }
}
