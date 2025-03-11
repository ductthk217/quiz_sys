<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\QuestionCategoryServiceInterface;
use App\Http\Requests\StoreQuestionCategoryRequest;
use App\Http\Requests\UpdateQuestionCategoryRequest;

class QuestionCategoryController extends Controller
{
    protected $service;

    public function __construct(QuestionCategoryServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $categories = $this->service->getAll();
        return view('question_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('question_categories.create');
    }

    public function edit(Request $request, $id)
    {
        $categories = $this->service->find($id);
        return view('question_categories.edit', compact('categories'));
    }

    public function store(StoreQuestionCategoryRequest  $request)
    {
        $this->service->create($request->validated());
        return redirect()->route('question_categories.index');
    }

    public function update(UpdateQuestionCategoryRequest  $request, $id)
    {
        $this->service->update($id, $request->validated());
        return redirect()->route('question_categories.index');
    }

    public function destroy($id)
    {
        $this->service->delete($id);
        return redirect()->route('question_categories.index');
    }
}
