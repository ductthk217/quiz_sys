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

    public function getAll()
    {
        return $this->repository->all();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update($id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete($id)
    {
        $category = $this->repository->find($id);  
        $category->delete();
    }
}
