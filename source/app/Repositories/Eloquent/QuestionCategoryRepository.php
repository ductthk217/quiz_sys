<?php

namespace App\Repositories\Eloquent;

use App\Models\QuestionCategory;
use App\Repositories\Interfaces\QuestionCategoryRepositoryInterface;

class QuestionCategoryRepository implements QuestionCategoryRepositoryInterface
{
    protected $category;

    public function __construct(QuestionCategory $category)
    {
        $this->category = $category;
    }

    public function all()
    {
        return $this->category->all();
    }

    public function find($id)
    {
        return $this->category->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->category->create($data);
    }

    public function update($id, array $data)
    {
        $category = $this->find($id);
        if (!$category || is_array($category)) {
            return response()->json(['error' => 'Cannot update non-existent category.'], 404);
        }

        $category->update($data);
        return $category;
    }

    public function delete($id)
    {
        $category = $this->find($id);

        if (!$category || is_array($category)) {
            return response()->json(['error' => 'Cannot delete non-existent category.'], 404);
        }

        return $category->delete();
    }
}
