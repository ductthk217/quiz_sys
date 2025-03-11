<?php

namespace Sample\Repositories;

use Sample\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    /**
     * Summary of __construct
     */
    public function __construct(protected Model $model)
    {
    }

    /**
     * Summary of all
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Summary of find
     * @param mixed $id
     * 
     * @return \Illuminate\Database\Eloquent\Collection<int, Model>
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * Summary of create
     * @param array $data
     * 
     * @return Model
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Summary of update
     * @param mixed $id
     * @param array $data
     * 
     * @return mixed
     */
    public function update($id, array $data)
    {
        return $this->find($id)->update($data);
    }

    /**
     * Summary of delete
     * @param mixed $id
     */
    public function delete($id)
    {
        return $this->find($id)->delete();
    }
}
