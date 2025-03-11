<?php

namespace App\Repositories\Eloquent;

use App\Models\QuestionCategory;
use App\Repositories\Interfaces\QuestionCategoryRepositoryInterface;

class QuestionCategoryRepository implements QuestionCategoryRepositoryInterface
{
    public function all()
    {
        return QuestionCategory::all();
    }

    public function find($id)
    {
        return QuestionCategory::findOrFail($id);
    }

    public function create(array $data)
    {
        return QuestionCategory::create($data);
    }

    public function update($id, array $data)
    {
        $category = $this->find($id);
        $category->update($data);
        return $category;
    }

    public function delete($id)
    {
        $category = $this->find($id);
        return $category->So();
    }
}
