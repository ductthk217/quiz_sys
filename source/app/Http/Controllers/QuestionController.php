<?php

namespace App\Http\Controllers;

use App\Http\Requests\Question\StoreQuestionRequest;
use App\Services\QuestionService;
use Illuminate\Support\Facades\Log;
use App\Models\Question;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class QuestionController extends BaseController
{

    public function __construct(private QuestionService $questionService)
    {
    }

    public function index()
    {
        return view('questions.index');
    }

    public function getData(Request $request)
    {
        $query = Question::query();

        return DataTables::of($query)
            ->addColumn('action', function ($row) {
                return '
                    <div class="d-flex justify-content-center gap-2">
                        <a href="' . route('questions.edit', $row->id) . '" class="btn btn-sm btn-primary">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger delete-question" data-id="' . $row->id . '">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </div>
                ';
            })
            ->editColumn('status', function ($row) {
                return '
                    <span class="question-status question-status-' . $row->status . '">' . __('questions.' . $row->status) . '</span>
                ';
            })
            ->editColumn('type', function ($row) {
                return __('questions.' . $row->type);
            })
            ->rawColumns(['action', 'status'])
            ->make(true);
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

    public function edit(int $id)
    {
        $question = $this->questionService->getQuestionById($id);
        $categories = $this->questionService->getCategoryQuestion();
        return view('questions.edit', compact('question', 'categories'));
    }

    public function update(StoreQuestionRequest $request, $id)
    {
        $this->questionService->updateQuestion($id, $request->validated());
        return redirect()->route('questions.index')->with('success', 'Cập nhật câu hỏi thành công!');
    }

    public function destroy(int $id)
    {
        $this->questionService->deleteQuestion($id);
        return $this->successResponse('Cập nhật câu hỏi thành công!');
    }
}
