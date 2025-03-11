<?php

namespace Sample\Repositories\Interfaces;

interface BaseRepositoryInterface
{
    /**
     * Summary of all
     */
    public function all();

    /**
     * Summary of find
     * @param mixed $id
     */
    public function find($id);

    /**
     * Summary of create
     * @param array $data
     */
    public function create(array $data);

    /**
     * Summary of update
     * @param mixed $id
     * @param array $data
     */
    public function update($id, array $data);

    /**
     * Summary of delete
     * @param mixed $id
     */
    public function delete($id);
}
