<?php

namespace App\Services;

use App\Repositories\Interfaces\QuestionCategoryRepositoryInterface;

class QuestionCategoryService 
{
    protected $repository;

    public function __construct(QuestionCategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
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
