<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ProvinceRepositoryInterface;
use App\Models\Province;
use App\Repositories\BaseRepository;


class ProvinceRespository extends BaseRepository implements ProvinceRepositoryInterface
{
    protected $model;

    public function __construct(
        Province $model
    ) {
        $this->model = $model;
    }
}
