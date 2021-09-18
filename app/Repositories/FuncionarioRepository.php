<?php

namespace App\Repositories;

use Exception;
use DB;

use App\Models\Funcionario;

class FuncionarioRepository extends BaseRepository
{
    protected $model = Funcionario::class;

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
            }

            return $query->orderBy($orderBy, $sort)->paginate($paginate);
        } catch (Exception $e) {
            return [];
        }
    }

    public function store($data)
    {
        try {
            $funcionario = new $this->model($data);
            $funcionario->save();

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function storeContato(Funcionario $funcionario, $data)
    {
        try {

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Funcionario $funcionario, $data)
    {
        try {
            $funcionario->fill($data);
            $funcionario->save();

            return true;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
}
