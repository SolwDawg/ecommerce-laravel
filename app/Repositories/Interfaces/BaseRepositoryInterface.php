<?php

namespace App\Repositories\Interfaces;


interface BaseRepositoryInterface
{
    public function create(array $payload = []);
    public function getAll();
    public function findById(int $id, array $columns = ["*"], array $relation = []);
    public function update(int $id = 0, array $payload = []);
    public function delete(int $id = 0);
    public function pagination(
        array $column = ['*'],
        array $condition = [],
        array $join = [],
        int $perpage = 20
    );
}
