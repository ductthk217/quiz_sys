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

    public function store(StoreQuestionRequest $request)
    {
        Log::info('Store question start', ['data' => $request->validated()]);
        $this->questionService->createQuestion($request->validated());
        return redirect()->route('questions.create')->with('success', 'Câu hỏi đã được tạo thành công!');
    }

    public function edit($id)
    {
        $question = $this->questionService->getQuestionById($id);
        $categories = $this->questionService->getCategoryQuestion();
        return view('questions.edit', compact('question', 'categories'));
    }

    public function update(StoreQuestionRequest $request, $id)
    {
        $this->questionService->updateQuestion($id, $request->validated());
        return redirect()->route('questions.create')->with('success', 'Cập nhật câu hỏi thành công!');
    }
}
