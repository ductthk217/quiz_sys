<?php

namespace App\Repositories\Eloquent;

use Illuminate\Support\Arr;

abstract class BaseRepository
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $_model;
    /**
     * EloquentRepository contructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get model
     * @return string
     */
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->_model = app()->make($this->getModel());
    }
    /**
     * Get All
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return $this->_model->all();
    }

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        $result = $this->_model->find($id);
        return $result;
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        // return $this->_model->create($attributes);
        if($this->_model->where('email', $attributes['email'])->exists()){
            throw new \Exception('Email đã tồn tại trong hệ thống!');
        }
        return $this->_model->create($attributes);
    }
    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return bool|mixed
     */
    public function update($id, array $attributes)
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    /**
     * Delete
     *
     * @param $id
     * @return bool
     */
    public function delete($id)
    {
        $result = $this->_model->find($id);
        if ($result) {
            $result->delete();
            return true;
        }
        return false;
    }
}
