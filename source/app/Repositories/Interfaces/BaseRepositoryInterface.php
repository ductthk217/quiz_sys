<?php
namespace App\Repositories\Interfaces;

interface BaseRepositoryInterface{
    public function getAll();
    public function find($id);
    public function create(array $attribute);
    public function update($id, array $attribute);
    public function delete($id);
}