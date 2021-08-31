<?php

namespace App\Repositories;

use Exception;
use DB;

use App\Models\Municipio;

class MunicipioRepository extends BaseRepository
{
    protected $model = Municipio::class;

    public function paginateWhere($paginate = 10, $orderBy, $sort = 'ASC', $columns = null)
    {
        try {
            $query = $this->model->query();

            if (count($columns) > 0) {
                if (isset($columns['nome'])) {
                    $query->where(function($query) use ($columns) {
                        $query->where('nome', 'like', '%'.mb_strtoupper($columns['nome']).'%');
                        $query->orWhere('nome', 'like', '%'.mb_strtolower($columns['nome']).'%');
                        $query->orWhere('nome', 'like', '%'.$columns['nome'].'%');
                    });
                }

                if (isset($columns['sigla'])) {
                    $query->where(function($query) use ($columns) {
                        $query->where('sigla', 'like', '%'.mb_strtoupper($columns['sigla']).'%');
                        $query->orWhere('sigla', 'like', '%'.mb_strtolower($columns['sigla']).'%');
                        $query->orWhere('sigla', 'like', '%'.$columns['sigla'].'%');
                    });
                }
            }

            return $query->orderBy($orderBy, $sort)->paginate($paginate);
        } catch (Exception $e) {
            return [];
        }
    }

    public function store($data)
    {
        try {
            $municipio = new $this->model($data);
            $municipio->save();

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Municipio $municipio, $data)
    {
        try {
            $municipio->fill($data);
            $municipio->save();

            return true;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
}
