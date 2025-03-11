<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\Interfaces\QuestionCategoryServiceInterface;

class QuestionCategoryController extends Controller
{
    protected $service;

    public function __construct(QuestionCategoryServiceInterface $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $categories = $this->service->getAllCategories();
        return view('question_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('question_categories.create');
    }
    public function edit(Request $request, $id)
    {
        $categories = $this->service->getCategoryById($id);
        return view('question_categories.edit', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $this->service->createCategory($validated);

        return redirect()->route('question_categories.index');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $this->service->updateCategory($id, $validated);

        return redirect()->route('question_categories.index');
    }

    public function destroy($id)
    {
        $this->service->deleteCategory($id);
        return redirect()->route('question_categories.index');
    }
}
