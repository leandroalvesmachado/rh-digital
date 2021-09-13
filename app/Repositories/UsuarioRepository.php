<?php

namespace App\Repositories;

use Exception;
use DB;

use App\Models\Usuario;

class UsuarioRepository extends BaseRepository
{
    protected $model = Usuario::class;

    public function paginateWhere($paginate = 10, $orderBy, $sort = 'ASC', $columns = null)
    {
        try {
            $query = $this->model->query();

            if (count($columns) > 0) {
                if (isset($columns['name'])) {
                    $query->where(function($query) use ($columns) {
                        $query->where('name', 'like', '%'.mb_strtoupper($columns['name']).'%');
                        $query->orWhere('name', 'like', '%'.mb_strtolower($columns['name']).'%');
                        $query->orWhere('name', 'like', '%'.$columns['name'].'%');
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
            $usuario = new $this->model($data);
            $usuario->save();

            return true;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(Usuario $usuario, $data)
    {
        try {
            $usuario->fill($data);
            $usuario->save();

            return true;
        } catch (Exception $e){
            return $e->getMessage();
        }
    }
}
