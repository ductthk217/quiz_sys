<?php

namespace App\Services;

use App\Repositories\Interfaces\QuestionCategoryRepositoryInterface;
use App\Services\Interfaces\QuestionCategoryServiceInterface;

class QuestionCategoryService implements QuestionCategoryServiceInterface
{
    protected $repository;

    public function __construct(QuestionCategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllCategories()
    {
        return $this->repository->all();
    }

    public function getCategoryById($id)
    {
        return $this->repository->find($id);
    }

    public function createCategory(array $data)
    {
        return $this->repository->create($data);
    }

    public function updateCategory($id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function deleteCategory($id)
    {
        $category = $this->repository->find($id);  
        $category->delete();
    }
}
