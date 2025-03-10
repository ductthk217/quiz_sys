<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\QuestionCategory;


class QuestionCategoryController extends Controller
{
    public function index()
    {
        $categories = QuestionCategory::all();
        return view('question_categories.index', compact('categories'));
    }

    // Form thêm mới danh mục
    public function create()
    {
        return view('question_categories.create');
    }

    // Lưu danh mục mới
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        QuestionCategory::create($request->all());
        return redirect()->route('question_categories.index')->with('success', 'Thêm mới thành công');
    }

    // Form chỉnh sửa danh mục
    public function edit(QuestionCategory $questionCategory)
    {
        return view('question_categories.edit', compact('questionCategory'));
    }

    // Cập nhật danh mục
    public function update(Request $request, QuestionCategory $questionCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $questionCategory->update($request->all());
        return redirect()->route('question_categories.index')->with('success', 'Cập nhật thành công');
    }

    // Xóa danh mục
    public function destroy(QuestionCategory $questionCategory)
    {
        $questionCategory->delete();
        return redirect()->route('question_categories.index')->with('success', 'Xóa thành công');
    }
}
