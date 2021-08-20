<?php

namespace App\Repositories;

use Exception;
use DB;

abstract class BaseRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->resolveModel();
    }

    protected function resolveModel()
    {
        return app($this->model);
    }

    public function paginate($paginate = 10, $orderBy, $sort = 'ASC')
    {
        try {
            return $this->model->query()->orderBy($orderBy, $sort)->paginate($paginate);
        } catch (Exception $e) {
            return [];
        }
    }
}
